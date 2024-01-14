<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{

    public function getCarData()
    {
        $cars = DB::select('SELECT * FROM `cars`
        ');

        // converting stdClass to array
        $carsArrToString = json_encode($cars);
        $carsArr = json_decode($carsArrToString, true);

        return $carsArr;
    }

    public function findCar($id)
    {

        $car = DB::select('SELECT * FROM `cars` where id = ?
        ', [$id]);


        // converting stdClass to array.
        $carArrToString = json_encode($car);
        $carArr = json_decode($carArrToString, true);

        return $carArr;
    }

    public function getCars()
    {
        $cars = $this->getCarData();

        return view(
            'cars',
            ['masinos' => $cars]
        );
    }

    public function getCar($id)
    {
        $car = $this->findCar($id);
        $isCarRented = $car[0]['rented'];

        $confirmationMessage = $isCarRented ? "The car is already rented" : "";

        return view('car', ['car' => $car, 'rentFormOpen' => false, 'confirmation' => $confirmationMessage]);
    }


    public function rentCar($id)
    {
    
        $car = $this->findCar($id);

        return view('car', ['rentFormOpen' => true, 'car' => $car]);
    }

    public function carRented($id)
    {
        DB::table('cars')->where('id', $id)->update(['rented' => true]);

        $clickedToRent = false;

        $car = $this->findCar($id);

        $confirmationMessage = 'Car rental request sent, you will receive a confirmation in email';

        return view('car', ['rentStatus' => $clickedToRent, 'car' => $car, 'confirmation' => $confirmationMessage]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function getCarData()
    {
        $cars = [
            [
                'id' => '1',
                'name' => "VW Golf 6",
                'price' => "37",
                'img' => asset('images/golf6.jpg'),
                'model' => 'Golf 6',
                'mark' => "Volkswagen",
                'year' => "2008",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",

            ],
            [
                'id' => '2',
                'name' => "Audi A1 S-Line",
                'price' => "45",
                'img' => asset('images/audia1.jpg'),
                'model' => "Audi",
                'mark' => "A1",
                'year' => "2012",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Gasoline",
            ],
            [
                'id' => '3',
                'name' => "Toyota Camry",
                'price' => "30",
                'img' => asset('images/toyotacamry.jpg'),
                'model' => "Camry",
                'mark' => "Toyota",
                'year' => "2006",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Automatic",
                'fuel' => "Hybrid",
            ],
            [
                'id' => '4',
                'name' => "BMW 320 ModernLine",
                'price' => "35",
                'img' => asset('images/bmw320.jpg'),
                'model' => "320",
                'mark' => "BMW",
                'year' => "2012",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",
            ],
            [
                'id' => '5',
                'name' => "Mercedes-Benz GLK",
                'price' => "50",
                'img' => asset('images/benz.jpg'),
                'model' => "Benz GLK",
                'mark' => "Mercedes",
                'year' => "2006",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",
            ],
            [
                'id' => '6',
                'name' => "VW Passat CC",
                'price' => "25",
                'img' => asset('images/passatcc.jpg'),
                'model' => "Passat CC",
                'mark' => "Volkswagen",
                ' year' => "2008",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Automatic",
                'fuel' => "Gasoline",
            ],
        ];

        return $cars;
    }

    public function findCar($id)
    {
        $cars = $this->getCarData();

        $carId = array_search($id, array_column($cars, 'id'));
        $car = $cars[$carId];

        return $car;
    }

    public function getCars()
    {
        $cars = $this->getcarData();

        return view(
            'cars',
            ['masinos' => $cars]
        );
    }

    public function getCar($id)
    {
        $car = $this->findCar($id);

        return view('car', ['car' => $car, 'rentStatus' => false, 'confirmation' => false]);
    }


    public function rentCar($id)
    {
        $clickedToRent = true;

        $car = $this->findCar($id);

        return view('car', ['rentStatus' => $clickedToRent, 'car' => $car]);
    }

    public function carRented($id)
    {
        $clickedToRent = false;

        $car = $this->findCar($id);

        $confirmationMessage = 'Car rental request sent, you will receive a confirmation in email';

        return view('car', ['rentStatus' => $clickedToRent, 'car' => $car, 'confirmation' => $confirmationMessage]);
    }
}

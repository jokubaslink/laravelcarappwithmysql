/** @type {import('tailwindcss').Config} */
/* export default {
  content: [],
  theme: {
    extend: {},
  },
  plugins: [],
}
 */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./public/*.php",
        "./public/index.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};

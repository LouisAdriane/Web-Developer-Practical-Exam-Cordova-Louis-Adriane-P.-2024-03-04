document.addEventListener("DOMContentLoaded", function() {
    const leftCar = document.getElementById("leftCar");
    const rightCar = document.getElementById("rightCar");
    const currentColorSelect = document.getElementById("currentColor");
    const targetColorSelect = document.getElementById("targetColor");

    // Function to change car color
    function changeCarColor(car, color) {
        switch (color) {
            case "gray":
                car.src = `img/graycar.png`;
                break;
            case "red":
                car.src = `img/redcar.png`;
                break;
            case "green":
                car.src = `img/greencar.png`;
                break;
            case "blue":
                car.src = `img/bluecar.png`;
                break;
            default:
                break;
        }
    }

    // Event listener for immediate color change - left car
    currentColorSelect.addEventListener("change", function() {
        changeCarColor(leftCar, currentColorSelect.value);
    });

    // Event listener for immediate color change - right car
    targetColorSelect.addEventListener("change", function() {
        changeCarColor(rightCar, targetColorSelect.value);
    });
});
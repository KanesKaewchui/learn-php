document.addEventListener("DOMContentLoaded", () => {
    const maxItems = 5;
    let itemCount = 0;
    const inputElement = document.getElementById("form");
    const buttonElement = document.getElementById("processButton");

    buttonElement.addEventListener("click", () => {
        const itemText = inputElement.value.trim();
        if (itemText === "") {
            alert("Please enter a to-do item.");
            return;
        }

        if (itemCount >= maxItems) {
            alert("You cannot add more than 5 items.");
        } else {
            addItemToList(itemText);
            inputElement.value = "";
            itemCount++;
        }
    });

    function addItemToList(itemText) {
        const listElement = document.createElement("li");
        listElement.textContent = itemText;
        document.body.appendChild(listElement);
    }
});

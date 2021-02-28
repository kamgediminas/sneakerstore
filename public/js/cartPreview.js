const storedMake = JSON.parse(localStorage.getItem("make"));
const storedModel = JSON.parse(localStorage.getItem("model"));
const storedPrice = JSON.parse(localStorage.getItem("price"));
const storedPhoto = JSON.parse(localStorage.getItem("photo"));

const clearCart = () => {
    localStorage.clear();
    location.reload();
};

(() => {
    let itemSum = 0;
    let cartList = "<div>";
    for (let i = 0; i < storedMake.length; i++) {
        cartList +=
            '<img class="sneakerIcon" alt="' +
            storedPhoto[i] +
            '" src="/img/item/' +
            storedPhoto[i] +
            '">' +
            "<p>" +
            storedMake[i] +
            " " +
            storedModel[i] +
            "</p><p>$" +
            storedPrice[i] +
            "</p><hr>";
        itemCost = parseFloat(storedPrice[i]);
        itemSum += itemCost;
    }

    cartList += "</div><div><p>Total price: $" + itemSum + "</p>";
    document.getElementById("cartList").innerHTML = cartList;
})();

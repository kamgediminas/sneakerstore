const addToCart = () => {
    const storedMake = JSON.parse(localStorage.getItem("make"));
    let make = [];
    if (storedMake != null) {
        storedMake.forEach(i => {
            make.push(storedMake[i]);
        });
    }

    const storedModel = JSON.parse(localStorage.getItem("model"));
    let model = [];
    if (storedModel != null) {
        storedModel.forEach(i => {
            model.push(storedModel[i]);
        });
    }

    const storedPrice = JSON.parse(localStorage.getItem("price"));
    let price = [];
    if (storedPrice != null) {
        storedPrice.forEach(i => {
            price.push(storedPrice[i]);
        });
    }

    const storedPhoto = JSON.parse(localStorage.getItem("photo"));
    let photo = [];
    if (storedPhoto != null) {
        storedPhoto.forEach(i => {
            photo.push(storedPhoto[i]);
        });
    }

    make.push(document.getElementById("make").innerHTML);
    model.push(document.getElementById("model").innerHTML);
    let priceFloat;
    priceFloat = document.getElementById("price").innerHTML;
    priceFloat = priceFloat.substr(1);
    price.push(priceFloat);
    photo.push(document.getElementById("photo").className);

    localStorage.setItem("make", JSON.stringify(make));
    localStorage.setItem("model", JSON.stringify(model));
    localStorage.setItem("price", JSON.stringify(price));
    localStorage.setItem("photo", JSON.stringify(photo));
    location.reload();
};

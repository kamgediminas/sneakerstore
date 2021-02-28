const preview = () => {
    const sneakerPreviewImage = document.getElementById("form-control").value;
    const make = document.getElementById("make").value;
    const model = document.getElementById("model").value;
    const price = document.getElementById("price").value;
    document.getElementById("sneakerPreviewImage").src =
        "/img/item/" + sneakerPreviewImage;
    document.getElementById("previewLine1").innerHTML = make + " " + model;
    if (price === "") {
        document.getElementById("previewLine2").innerHTML = " " + price;
    } else {
        document.getElementById("previewLine2").innerHTML = "$" + price;
    }
};
preview();

function loadMainText(jsonObj) {
    $('#ikea-main-title').html(jsonObj.mainText.title);
    $('#ikea-main-subtitle').html(jsonObj.mainText.subTitle);
    $('#ikea-main-mainbody').html(jsonObj.mainText.mainBody);
}

function loadProductMainText(jsonObj, prod, index) {
    $('#' + prod + "-main-title").html(jsonObj.prodMainText[index].title);
    $('#' + prod + "-main-subtitle").html(jsonObj.prodMainText[index].subTitle);
    $('#' + prod + "-main-mainbody").html(jsonObj.prodMainText[index].mainBody);
}

function loadProductParameter(jsonObj, prod, index) {
    $('#' + prod + "-material").html(jsonObj.prodParameters[index].material);
    $('#' + prod + "-care").html(jsonObj.prodParameters[index].care);
}

function loadProductDesigner(jsonObj, prod, index) {
    $('#designer-' + prod + "-name").html(jsonObj.designers[index].name);
    $('#designer-' + prod + "-comment").html(jsonObj.designers[index].comment);
}

$(document).ready(function () {
    $.getJSON("./application/model/data.php",
        function (jsonObj) {
            loadMainText(jsonObj);
            loadProductMainText(jsonObj, "billy", 0);
            loadProductMainText(jsonObj, "vesken", 1);
            loadProductMainText(jsonObj, "voxlov", 2);
            loadProductParameter(jsonObj, "billy", 0);
            loadProductParameter(jsonObj, "vesken", 1);
            loadProductParameter(jsonObj, "voxlov", 2);
            loadProductDesigner(jsonObj, "billy", 0);
            loadProductDesigner(jsonObj, "vesken", 1);
            loadProductDesigner(jsonObj, "voxlov", 2);
        }
    );
    $('#home').show();
    $('#products-group').show();
    $('#model-viewer').hide();
    $('#designer').hide();
})
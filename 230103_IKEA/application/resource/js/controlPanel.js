function switchModel(model) {
    switch (model) {
        case 'home':
            $('#home').show();
            $('#products-group').show();
            $('#model-viewer').hide();
            $('#designer').hide();
            break;
        case 'Billy':
            $('#home').hide();
            $('#products-group').hide();
            $('#model-viewer').show();
            $('#billy-parameter').show();
            $('#vesken-parameter').hide();
            $('#voxlov-parameter').hide();
            $('#designer').show();
            $('#designer-billy').show();
            $('#designer-vesken').hide();
            $('#designer-voxlov').hide();
            $('#model_selector').attr('whichChoice', '0');
            break;
        case 'Vesken':
            $('#home').hide();
            $('#products-group').hide();
            $('#model-viewer').show();
            $('#billy-parameter').hide();
            $('#vesken-parameter').show();
            $('#voxlov-parameter').hide();
            $('#designer').show();
            $('#designer-billy').hide();
            $('#designer-vesken').show();
            $('#designer-voxlov').hide();
            $('#model_selector').attr('whichChoice', '1');
            break;
        case 'Voxlov':
            $('#home').hide();
            $('#products-group').hide();
            $('#model-viewer').show();
            $('#billy-parameter').hide();
            $('#vesken-parameter').hide();
            $('#voxlov-parameter').show();
            $('#designer').show();
            $('#designer-billy').hide();
            $('#designer-vesken').hide();
            $('#designer-voxlov').show();
            $('#model_selector').attr('whichChoice', '2');
            break;
        default:
            break;
    }
    $('#model-title').html(model);
    viewFromCamera('Front');
}

function modelResolve() {
    switch ($("#model_selector").attr("whichChoice")) {
        case '0':
            return 'billy';
        case '1':
            return 'vesken';
        case '2':
            return 'voxlov';
        default:
            break;
    }
}

function viewFromCamera(direction) {
    model = modelResolve();
    console.log(model + '__' + direction);
    document.getElementById(model + '__' + direction).setAttribute('set_bind', 'true');
}

isRunning = false
function switchAnimationState() {
    model = modelResolve();
    isRunning = !isRunning;
    document.getElementById(model + '__' + 'AnimationTimer').setAttribute('enabled', isRunning.toString());
    console.log(document.getElementById(model + '__' + 'AnimationTimer'));
    if (isRunning) {
        $("#animation-trigger").html('Stop');
    } else {
        $("#animation-trigger").html('Start');
    }
}


function switchLight(model, lightType, elementId, x3dId) {
    flag = $('#' + model + '__' + lightType).attr(x3dId);

    flag = (flag == 'true') ? 'false' : 'true';

    $('#' + model + '__' + lightType).attr(x3dId, flag);
    if (flag == 'true') {
        $('#' + elementId).removeClass('fa-toggle-off');
        $('#' + elementId).addClass('fa-toggle-on');
    } else {
        $('#' + elementId).removeClass('fa-toggle-on');
        $('#' + elementId).addClass('fa-toggle-off');
    }

    console.log(model + '__' + lightType);
}

function recallUIElement() {

}

function switchDirectLight() {
    model = modelResolve();
    switchLight(model, 'Direct', 'directlight-sw', 'on');
}

function switchSpotLight() {
    model = modelResolve();
    switchLight(model, 'Spot', 'spotlight-sw', 'on');
}

function switchPointLight() {
    model = modelResolve();
    switchLight(model, 'Point', 'pointlight-sw', 'on');
}


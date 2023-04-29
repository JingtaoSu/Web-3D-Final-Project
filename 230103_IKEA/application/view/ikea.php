<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- css file -->
    <link rel="stylesheet" href="./application/resource/css/bootstrap.css" />
    <link rel="stylesheet" href="https://www.x3dom.org/release/x3dom.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- tool scrpit -->
    <script src="./application/resource/js/jquery-3.6.3.js"></script>
    <script src="./application/resource/js/popper.js-1.14.7.js"></script>
    <script src="./application/resource/js/bootstrap.js"></script>
    <script src="https://www.x3dom.org/release/x3dom.js"></script>
    <script src="https://kit.fontawesome.com/6ac3910c4e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <title>IKEA 3D Model</title>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar sticky-top navbar-expand-sm navbar-ikea">
        <!-- IKEA logo -->
        <h2 class="logo">
            IKEA
        </h2>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <h1 style="border: 1px; border-color: rgb(255, 218, 26); color: rgb(255, 218, 26);">
                <i class="fas fa-caret-square-down"></i>
            </h1>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item menu-item-ikea">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item menu-item-ikea">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#contactModal">About</a>
                </li>
                <li class="nav-item dropdown menu-item-ikea">
                    <a class="nav-link dropdown-toggle" id="prod-drop" data-toggle="dropdown" href="">Products</a>
                    <div class="dropdown-menu">
                        <a onclick="switchModel('Billy')" class="dropdown-item"
                            style="color: rgb(0, 81, 186);">Billy</a>
                        <a onclick="switchModel('Vesken')" class="dropdown-item"
                            style="color: rgb(0, 81, 186);">Vesken</a>
                        <a onclick="switchModel('Voxlov')" class="dropdown-item"
                            style="color: rgb(0, 81, 186);">Voxlov</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- main content -->
    <div class="container-fluid">
        <!-- big image of ikea -->
        <div id="home">
            <div class="row">
                <div class="ikea-main-page col-sm-12">
                    <div class="ikea-main-text col-xs-12 col-sm-4">
                        <h4 id="ikea-main-title"></h4>
                        <h6 id="ikea-main-subtitle"></h6>
                        <p id="ikea-main-mainbody"></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- holding three cards -->
        <div id="products-group">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/billy.png" alt="billy">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h3 id="billy-main-title"></h3>
                    <h6 id="billy-main-subtitle"></h6>
                    <p id="billy-main-mainbody"></p>
                    <a href="https://www.ikea.com/gb/en/p/billy-oxberg-bookcase-with-door-white-s69287392/"
                        class="btn btn-primary product-btn">View more in IKEA</a>
                    <button onclick="switchModel('Billy')" class="btn btn-primary product-btn">View 3D Model</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/vesken.png" alt="vesken">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h3 id="vesken-main-title"></h3>
                    <h6 id="vesken-main-subtitle"></h6>
                    <p id="vesken-main-mainbody"></p>
                    <a href="https://www.ikea.com/gb/en/p/vesken-trolley-white-00471222/"
                        class="btn btn-primary product-btn">View more in IKEA</a>
                    <button onclick="switchModel('Vesken')" class="btn btn-primary product-btn">View 3D Model</button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/voxlov.png" alt="vesken">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h3 id="voxlov-main-title"></h3>
                    <h6 id="voxlov-main-subtitle"></h6>
                    <p id="voxlov-main-mainbody"></p>
                    <a href="https://www.ikea.com/gb/en/p/voxloev-dining-table-light-bamboo-40434322/"
                        class="btn btn-primary product-btn">View more in IKEA</a>
                    <button onclick="switchModel('Voxlov')" class="btn btn-primary product-btn">View 3D Model</button>
                </div>
            </div>
        </div>

        <!-- 3D model and Control panel -->
        <div id="model-viewer">
            <div class="row">
                <!-- 3D model -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="card model-card">
                        <div class="card-body">
                            <h1 id="model-title"></h1>
                            <div class="model">
                                <x3d>
                                    <scene>
                                        <Switch whichChoice="0" id="model_selector">
                                            <transform>
                                                <inline mapDEFToID="true" nameSpaceName="billy"
                                                    url="./assets/x3d/Billy.x3d" />
                                            </transform>
                                            <transform>
                                                <inline mapDEFToID="true" nameSpaceName="vesken"
                                                    url="./assets/x3d/Vesken.x3d" />
                                            </transform>
                                            <transform>
                                                <inline mapDEFToId="true" nameSpaceName="voxlov"
                                                    url="./assets/x3d/Voxlov.x3d" />
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card panel-card">
                        <div class="card-body">
                            <h2>Control Panel</h2>
                            <h6>Camera Control</h6>
                            <div class="panel-btns">
                                <a class="btn btn-primary" onclick="viewFromCamera('Front')">Front</a>
                                <a class="btn btn-primary" onclick="viewFromCamera('Back')">Back</a>
                                <a class="btn btn-primary" onclick="viewFromCamera('Top')">Top</a>
                                <a class="btn btn-primary" onclick="viewFromCamera('Bottom')">Bottom</a>
                                <a class="btn btn-primary" onclick="viewFromCamera('Left')">Left</a>
                                <a class="btn btn-primary" onclick="viewFromCamera('Right')">Right</a>
                            </div>
                            <h6>Animation Control</h6>
                            <div class="panel-btns">
                                <a id="animation-trigger" class="btn btn-secondary"
                                    onclick="switchAnimationState()">Start</a>
                            </div>
                            <h6>Lights Control</h6>
                            <div class="panel-btns">
                                <a class="btn btn-secondary" onclick="switchDirectLight()">
                                    Direction Light&nbsp&nbsp
                                    <i id="directlight-sw" class="fas fa-toggle-off"></i></a>
                                <a class="btn btn-secondary" onclick="switchPointLight()">
                                    Point Light&nbsp&nbsp
                                    <i id="pointlight-sw" class="fas fa-toggle-off"></i></a>
                                <a class="btn btn-secondary" onclick="switchSpotLight()">
                                    Spot Light&nbsp&nbsp
                                    <i id="spotlight-sw" class="fas fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card panel-card">
                        <div class="card-body">
                            <h2>Products Parameter</h2>
                            <div id="billy-parameter">
                                <div id="billy-material"></div>
                                <div id="billy-care"></div>
                            </div>
                            <div id="vesken-parameter">
                                <div id="vesken-material"></div>
                                <div id="vesken-care"></div>
                            </div>
                            <div id="voxlov-parameter">
                                <div id="voxlov-material"></div>
                                <div id="voxlov-care"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="designer">
            <div id="designer-billy" class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/designer_of_billy.png" alt="designer of billy">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h4 id="designer-billy-name"></h4>
                    <p id="designer-billy-comment"></p>
                </div>
            </div>
            <div id="designer-vesken" class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/designer_of_vesken.png" alt="designer of vesken">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h4 id="designer-vesken-name"></h4>
                    <p id="designer-vesken-comment"></p>
                </div>
            </div>
            <div id="designer-voxlov" class="row">
                <div class="col-lg-3 col-md-4 col-sm-12 product-img">
                    <img class="img-fluid" src="./assets/images/designer_of_voxlov.png" alt="designer of voxlov">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 product-text">
                    <h4 id="designer-voxlov-name"></h4>
                    <p id="designer-voxlov-comment"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="modal fade" id="contactModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- contact modal title -->
                <div class="modal-header">
                    <h4 class="modal-title">IKEA 3D App Contact Details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- contact modal body -->
                <div class="modal-body">
                    <p>Candidate Number: 230103</p>
                </div>
                <!-- contact modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <nav class="navbar navbar-expand-sm footer">
        <div class="container-fluid footer-ikea">
            <div class="float-left copyright">
                <div><span class="align-baseline">&copy 2023 IKEA 3D Apps</span></div>
            </div>
            <div class="social">
                <a href=""><i class="fab fa-github-square fa-2x fa-pull-right"></i></a>
                <a href=""><i class="fab fa-google-plus-square fa-2x fa-pull-right"></i></a>
                <a href=""><i class="fab fa-twitter-square fa-2x fa-pull-right"></i></a>
                <a href=""><i class="fab fa-facebook-square fa-2x fa-pull-right"></i></a>
            </div>
        </div>
    </nav>
</body>

<style type="text/css">
    @import"./application/resource/css/custom.css";
</style>

<script src="./application/resource/js/loadData.js"></script>
<script src="./application/resource/js/controlPanel.js"></script>

</html>
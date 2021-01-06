<?php
require_once("./config/db.php");
?>
<style>
    body {
        background-image: url("/assets/images/hyundai4k.jpg");
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
</style>
<div class="wrapper" id="main">
    <section class="product-listing page-section-ptb lazyload post-8670 cars type-cars status-publish hentry car_year-1051 car_make-toyota car_model-tacoma car_body_style-truck car_mileage-1565 car_drivetrain-4wd car_engine-4-0l-v6-236hp-266ft-lbs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div data-vc-full-width="true" data-vc-full-width-init="false" style="height: 100px !important; max-height: 100px !important; background:#2d397a;">


                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>

                    <div class="vc_row wpb_row vc_row-fluid row-background-light">
                        <div class="vc_row-background-overlay" style="opacity: 0.8;"></div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 cd-content">
                    <div class="cars-top-filters-box">
                        <div class="cars-top-filters-box-left">
                            <div class="price_slider_wrapper">
                                <div class="price-slide">
                                    <div class="price"><input type="hidden" id="pgs_min_price" name="min_price" value="" data-min="0" /><input type="hidden" id="pgs_max_price" name="max_price" value="" data-max="2599100" data-step="100" /><label for="dealer-slider-amount">Price Range</label><input type="text" id="dealer-slider-amount" class="dealer-slider-amount" readonly="" value="" />
                                        <div id="slider-range" class="slider-range"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <button id="pgs_price_filter_btn" class="button">Filter</button>
                            </div>
                        </div>
                        <div class="cars-top-filters-box-right">
                            <div class="selected-box">
                                <select name="cars_pp" id="pgs_cars_pp" class="cd-select-box">
                                    <option value="12" selected='selected'>12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                    <option value="48">48</option>
                                    <option value="60">60</option>
                                </select>
                            </div>
                            <div class="selected-box">
                                <div class="select">
                                    <select class="select-box cd-select-box" name="cars_orderby" id="pgs_cars_orderby">
                                        <option value="">Sort by Default</option>
                                        <option value="name">Sort by Name</option>
                                        <option value="sale_price">Sort by Price</option>
                                        <option value="date" selected='selected'>Sort by Date</option>
                                        <option value="year">Sort by Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cars-order text-right"><a id="pgs_cars_order" data-order="asc" data-current_order="desc" href="javascript:void(0)"><i class="fas fa-arrow-down"></i></a></div>
                            <div class="pgs_cars_search_box"><button class="pgs_cars_search_btn not_click"><i class="fas fa-search"></i></button>
                                <div class="pgs_cars_search search" style="display:none;">
                                    <input type="search" id="pgs_cars_search" class="form-control search-form placeholder" value="" name="s" placeholder="Search..." />
                                    <button class="search-button" id="pgs_cars_search_btn" value="Search" type="submit"><i class="fas fa-search"></i></button>
                                    <div class="auto-compalte-list">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row" data-sticky_parent>
                <!-- Filter for lazyload -->
                <aside class="sidebar col-lg-3 col-md-3 col-sm-3">
                    <div class="listing-sidebar listing-sidebar-lazyload listing-sidebar-sticky" data-sticky_column>
                        <div class="widget cars_filters">
                            <h6 class="widgettitle">
                                Cars Filters <a href="#cdhl-vehicle-filters-lazyload" data-toggle="collapse">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </h6>
                            <div id="cdhl-vehicle-filters-lazyload" class="cdhl-vehicle-filters">
                                <div class="widget cars_filters">
                                    <div id="cdhl-vehicle-filters-1" class="cdhl-vehicle-filters">
                                        <div class="cars-total-vehicles"><span class="stripe"><strong><span class="number_of_listings">51</span> <span class="listings_grammar">Vehicles Matching</span></strong></span>
                                            <ul class="stripe-item filter margin-bottom-none" data-all-listings="All Listings"></ul>
                                        </div>
                                        <div class="listing_sort">
                                            <div class="sort-filters"><select data-tax="Year" data-id="car_year" id="sort_car_year" name="car_year" class="select-sort-filters cd-select-box">
                                                    <option value="">Year</option>
                                                    <option value="1998">1998</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>

                                                </select><select data-tax="Make" data-id="car_make" id="sort_car_make" name="car_make" class="select-sort-filters cd-select-box">
                                                    <option value="">Marca</option>
                                                    <?php
                                                    $marcas = $conexion->query(" SELECT * FROM marcas");
                                                    while ($data = $marcas->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idmarca"];  ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>





                                                </select><select data-tax="Model" data-id="car_model<" id="sort_car_model" name="car_model" class="select-sort-filters cd-select-box">
                                                    <option value="">Categoria</option>
                                                    <?php
                                                    $categoria = $conexion->query(" SELECT * FROM categorias");
                                                    while ($data = $categoria->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idcategoria"]; ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select><select data-tax="Body Style" data-id="car_body_style" id="sort_car_body_style" name="car_body_style" class="select-sort-filters cd-select-box">
                                                    <option value="">Condicion</option>
                                                    <?php
                                                    $condicion = $conexion->query(" SELECT * FROM estados_autos");
                                                    while ($data = $condicion->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idestado_auto"];  ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select><select data-tax="Condition" data-id="car_condition" id="sort_car_condition" name="car_condition" class="select-sort-filters cd-select-box">
                                                    <option value="">Transmision</option>
                                                    <?php
                                                    $transmicion = $conexion->query(" SELECT * FROM transmisiones");
                                                    while ($data = $transmicion->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idtransmision"];  ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select><select data-tax="Mileage" data-id="car_mileage" id="sort_car_mileage" name="car_mileage" class="select-sort-filters cd-select-box">
                                                    <option value="">Kilometraje</option>
                                                    <option value="10000">Menor De 10.000</option>
                                                    <option value="20000">Menor De 20.000</option>
                                                    <option value="30000">Menor De 30.000</option>
                                                    <option value="40000">Menor De 40.000</option>
                                                    <option value="50000">Menor De 50.000</option>
                                                    <option value="60000">Menor De 60.000</option>
                                                    <option value="70000">Menor De 70.000</option>
                                                    <option value="80000">Menor De 80.000</option>
                                                    <option value="90000">Menor De 90.000</option>
                                                    <option value="100000">Menor De 100.000</option>
                                                </select><select data-tax="Transmission" data-id="car_transmission" id="sort_car_transmission" name="car_transmission" class="select-sort-filters cd-select-box">
                                                    <option value="">Vendedor</option>
                                                    <?php
                                                    $vendedor = $conexion->query(" SELECT * FROM tipo_vendedores");
                                                    while ($data = $vendedor->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idtipo_vendedor"];  ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select><select data-tax="Drivetrain" data-id="car_drivetrain" id="sort_car_drivetrain" name="car_drivetrain" class="select-sort-filters cd-select-box">
                                                    <option value="">Region</option>
                                                    <?php
                                                    $region = $conexion->query(" SELECT * FROM regiones");
                                                    while ($data = $region->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $data["idregion"];  ?>"><?php echo $data["nombre"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                                <div class=""><a class="button" href="" id="reset_filters">Reset</a></div>
                                            </div><span class="filter-loader"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </aside>
                <!-- Filter for lazyload end -->
                <div class="content col-lg-9 col-md-9 col-sm-9 masonry-main">
                    <div class="all-cars-list-arch isotope-2 masonry filter-container">
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center first">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/359e94dff8_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-toyota-tacoma-double-cab-trd-sport-4x4/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8670"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/359e94dff8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f6bdabee1f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c74416dbc6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8d963e713f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7eb49d05bf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2a9b3d86cb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e9f6245aa3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/eb3077dedf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3905e908d8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fa1c4b36ef_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/979aba7320_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/891f456709_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/978249423b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b7891e5984_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8bc974d17c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d04c8be1d1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8d9fdabafe_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/96fdf82fd9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0005f67f32_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/43d5db1f00_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0a957b99b9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/07368aff3b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/dfba699ca5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a44b7948db_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6f8c1d0bf7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/58ff0f66e1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b693624edf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a99c79a8ec_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0f8453a16a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3655237ca5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5820df1d02_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1a7d448d74_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4ae6e4b836_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f35ec241bd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9d94d2c939_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ae0dd455dd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9e3b8edb72_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c9ee08066d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/560f5080f7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7e46b5d636_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f0fab0e705_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/03653d1976_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e1a4e21357_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1517b3d078_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/72f8177d4a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/18a52a320f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5bd5ddc1c5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/57361db43d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/34e6ebd2cc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ee548a7e54_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/212bfe8dfa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3dad257a1c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f02d56d5c5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/651b49e64b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/06b9455627_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2013</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 82684</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-toyota-tacoma-double-cab-trd-sport-4x4/">2013 Toyota Tacoma</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8670"><span class="new-price"> &#036;23,900.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3eca27c26a_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-lexus-rx-awd/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8620"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3eca27c26a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0d92a69d1b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1395285a67_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d5206aa6b6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/16a09cb9b8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/59ed1ed0e3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/52eec9b805_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b7c8e85dbb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ad116e18c3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2c3cbea202_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2a753df0a4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/48144e5814_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/282b4f2c63_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c9074f28aa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4659ca2c59_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f9027f305d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/35432a8fd6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/197efbe04e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/80ff741946_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b3ef8c5828_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bfabdd8537_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0c4c566fd4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5ff129c19b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bc1300ddee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b31f60762c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3aaedea654_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2df4224812_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5610d01f33_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fa393c978b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/697df21409_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/129914b914_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1a3eeedb1a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/85f856653e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/22df49e5f6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e530114484_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1b38901556_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bf9fe7e40e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/93a201386e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/87c4de4a0c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6210cb1059_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5089e290ce_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3a05943b23_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8832d0055d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8d7ee1ec27_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d3d30b5793_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e82a257130_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/98a794f864_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/319306d21a_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2011</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 89827</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-lexus-rx-awd/">2011 Lexus RX</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8620"><span class="new-price"> &#036;19,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=JTJBK1BA2B2010872" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-1-owner-e1584595769821.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/51b31d9e35_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-volkswagen-eos/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8521"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/51b31d9e35_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3cd9065c11_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b6920b599b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/cf92cae07e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9d6a9ae10e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d0c42957c5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2bf40eda39_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/77b8b60dc1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0c39fbe926_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8a00331a48_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e146415584_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e88b27d230_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e05d35dc47_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5308f713e4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/67e1911cd8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a35870540e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b9f3d4e2e3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0fe5bed7c1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/675a13ff22_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e722b280fd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6693456ff4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f0c2597352_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/300c251d91_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/cb09f992f7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c40a63a075_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/71c9df8b24_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9c8a40c315_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/85c37d8548_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/051fa552b2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/42d51ead2c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9a655a5f74_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/34141fd472_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7bcfe41d68_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5648fb3963_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/06df73cbb4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/470944b9a4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d9d350dc1a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6c63df1cb4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ff791122ef_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d264e36630_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9fa5678c8f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e40082297f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0b1027c839_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9f00593060_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/26f5f80040_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/193517b633_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2013</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 45246</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-volkswagen-eos/">2013 Volkswagen Eos</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8521"><span class="new-price"> &#036;18,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=WVWBW8AH0DV005279" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e470adaf32_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2012-mercedes-benz-m-class/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8568"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e470adaf32_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d398a8cda8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/be52fd4507_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f33616b58b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ca38fb9615_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/764103785f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c623186adc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ec2dab5ad3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5729ed5131_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/faf5e06e66_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8cf391f9ae_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/86727df712_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9bf0f346ad_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8f15b95091_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a44b32efc9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c6870f3d78_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5963f0ffad_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7114c2642c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/aae799fbd1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9efe7e7530_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6f2d50256d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9eece36814_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5fafe6e14e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/01a2c5b362_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d4cafe4927_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/24c036e101_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1ca53ae73e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e2299aebbe_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/55df7878b1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a71a0cf7e4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e436ec65fb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ce4f1f12f8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b2d9a448d4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b9ac6e6ba4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8eaa7b6b97_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9952f2cf17_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/040e2b54e7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/562046eb1e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c991c9e374_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/459642cb4a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/08d4eeedb9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b9925fc87e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9233b54307_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0ab6fa5fee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9075723fef_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0997714dfe_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/24321bf632_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/be706c8518_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8a1482599c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7f9f368035_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2012</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 75449</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2012-mercedes-benz-m-class/">2012 Mercedes-Benz M-Class</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8568"><span class="new-price"> &#036;22,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=4JGDA5HB2CA006345" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center last">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3992dce7d2_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-audi-a4/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8421"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3992dce7d2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bcf17eb139_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3605838b84_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/37b6ffc5e8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/84152e86a5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5375625767_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/29159c922c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/aa7d2c1981_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b8f785ce5a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a97f208910_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/94b21cc405_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d53198b6d7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/35f2d8b68f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/decdc2f16c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e0a6c83349_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/896e3f936c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/45c62953fb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/93f9581211_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/71312e5dfe_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/79dac27180_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c5200253d3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8829a4f9d8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9fe854f85f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1503356ce5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/225b3cdb5c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/aeaafa07c4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/08b818eb91_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3fd0c0a2a8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5c1bd45f9a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/747d16cd56_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2b53ad4891_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/96352cb788_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3e018b0681_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6ef4dd3ebb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5bcca2ee3f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f66094335f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b94f8d6241_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/daa4d5796a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6d83cf3d95_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3035b705ca_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/67ef8def80_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e9d4248f06_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bedb048264_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/17588c7e4d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f2e4937c45_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/92e555e3ee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/167331520e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ee8300ed15_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d5bd3d5adf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e8927ae8e4_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2013</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 60766</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-audi-a4/">2013 Audi A4</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8421"><span class="new-price"> &#036;17,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=WAUFFAFL5DN004650" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-1-owner-e1584595769821.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center first">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fc1a689af4_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2007-lexus-es/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8472"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fc1a689af4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/42574996dc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/30bfe7446f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/71ae73e921_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a2ef63b593_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3034e016bf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7c859ff8ff_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/36a4eeee18_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/66542c309f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2dc8047719_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4a8da61a29_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/481f448cac_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/eeaaa29fda_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b684ec4ed0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/25dd278874_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/741045542a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/44eea87464_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3a7394bdce_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1b889a89c3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/51263a7063_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2c6a0f0010_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1c9bb53835_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/15f41f9f95_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6461d66c76_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0af6574ffd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f1ee9caf62_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1fdb625daa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2da1502e94_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ec45452ede_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/47f90a7927_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1c72d363b6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/899579d78a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f1a712ac84_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ebd65c5e20_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a702f06051_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/27114bcc42_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/02f24dfea7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3304bbda22_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bf073fab1f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/357a6786ef_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f33be90acc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3a1a02aeed_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/93e3535ffa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a578b2376f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/14dd3e1e51_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/63cad57716_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0b7c6789ba_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4091e635fd_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2007</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 115364</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2007-lexus-es/">2007 Lexus ES</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8472"><span class="new-price"> &#036;9,200.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=JTHBJ46G372004848" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/cc1acd6ce3_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2015-lexus-rc-350/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8280"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/cc1acd6ce3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f682efb9ff_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b3f4893143_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/84f312ab1f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1a2bd08d3f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1c5365c9b5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ba8f418450_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ebc19d4da6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3aa3995a4f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/97986d198a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a64234fb42_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4f60c04959_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/56c501059b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b1914740bc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5c19003d5b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/41e0b7b33f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/475a3854ac_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d98aceaf00_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7dc11bca66_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a88a6e587c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f28dbafdbe_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/57e00485b3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/058bf9297a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2fcc5c6303_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/019073889a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/aff1798cf8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f85631b2c2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6d4cafef6d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d7bfb10215_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d50e80d4bf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e18b9d3e80_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/27948ae666_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/27aacc2009_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3fe0108393_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a69bcfb762_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6fec846de5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c26cf53e4f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7f8511575d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/eb941ca689_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/989c9f79e6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/17aaad30ba_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3361dab50b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/96cafec974_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/08892ea6c3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/86f4ec4e01_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a90f5b0d36_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2015</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 35126</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2015-lexus-rc-350/">2015 Lexus RC 350</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8280"><span class="new-price"> &#036;32,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=JTHSE5BC4F5001631" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-1-owner-e1584595769821.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9e890d3600_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2016-volkswagen-touareg/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8327"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9e890d3600_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1708b8c872_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f2b24b0614_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4b224bde8a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/27cb71ba2d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d54ad4970a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a4fc0fd13d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/60f770391d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c4ad507262_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9a70a55366_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8b73306c77_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0ad5ed312a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6d49091efb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/84297c2329_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/16d134b492_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f9c742b0d7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e36ba9f7dd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fc189595b0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4317e75ba5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7cf1869271_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/832323ff95_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/60c4a8d3c7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/340746f729_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1cc8296114_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8674b09718_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3ab0eadcea_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/427903328f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/93a45752f9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ad21389501_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/07383e018d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8981b0be02_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ac2011970e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/cc02b9cfa1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3ccc1d463e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c46c6124cc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3abf849bc2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5d2075425c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e07af20ec6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fc1bf84d06_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1effb1d9e0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a59992f769_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fa0e84885b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/01d7b1c879_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f9c01143aa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1aabb283d7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f7a187fb64_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1e465c12b1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/db089bbbdf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6125e09c1c_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2016</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 28065</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2016-volkswagen-touareg/">2016 Volkswagen Touareg</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8327"><span class="new-price"> &#036;34,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=WVGEF9BP3GD002035" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <span class="label car-condition used">Used</span><img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3eca27c26a_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-lexus-rx-4a68cc461bbb37479bcbe8c8ac99643c/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8926"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3eca27c26a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0d92a69d1b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1395285a67_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d5206aa6b6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/16a09cb9b8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/59ed1ed0e3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/52eec9b805_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b7c8e85dbb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ad116e18c3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2c3cbea202_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2a753df0a4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/48144e5814_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/282b4f2c63_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c9074f28aa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4659ca2c59_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f9027f305d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/35432a8fd6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/197efbe04e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/80ff741946_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b3ef8c5828_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bfabdd8537_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0c4c566fd4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5ff129c19b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bc1300ddee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b31f60762c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3aaedea654_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2df4224812_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5610d01f33_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fa393c978b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/697df21409_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/129914b914_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1a3eeedb1a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/85f856653e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/22df49e5f6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e530114484_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1b38901556_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bf9fe7e40e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/93a201386e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/87c4de4a0c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6210cb1059_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5089e290ce_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3a05943b23_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8832d0055d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8d7ee1ec27_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d3d30b5793_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e82a257130_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/98a794f864_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/319306d21a_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2011</li>
                                            <li class="car-transmission-dots" title="Automatic"><i class="fas fa-cog"></i> Automatic</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 89827</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-lexus-rx-4a68cc461bbb37479bcbe8c8ac99643c/">2011 Lexus RX 350</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8926"><span class="new-price"> &#036;19,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=JTJBK1BA2B2010872" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-1-owner-e1584595769821.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center last">
                                <div class="car-image">
                                    <span class="label car-condition used">Used</span><img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/66058966ec_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-nissan-juke-0b3e6ca56ba6224bb0fefca6a5ca1c15/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="8928"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/66058966ec_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8f6caf1d23_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a1932ffa70_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ece20f403a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e7d0da6303_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/546fd5054b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7b04b69408_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0dd826b2c5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2e5d14d097_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1fee351263_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fbac4daffb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3396a46eee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/458e7e4829_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4efe642161_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/60294be044_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bdef64ab33_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d4857042cb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/751abe8d9c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4db7aee023_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6261a04d32_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5a1e2eb9e5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/91077f4202_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/28a2111a37_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7d5cf6070e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/344bfb04be_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ffc149a18c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/53c5c2b6e8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/835ff9ab8f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a64a235974_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e5820d7995_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7690de4946_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3da1bb0423_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/04ea2a1795_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2877b33f7a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/862746a799_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6050e10c66_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7fc1c412e4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/706e79f51b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/516e160f68_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d2c590ba3a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0c8aa2b331_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/06aeef7c8d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/83e729bb61_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/32ff8d6665_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/202fcd7e67_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1c6b3af601_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/65dd79c918_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0d6d4a1fb4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8fb32861f4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0b61f0099e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5e0720368b_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2011</li>
                                            <li class="car-transmission-dots" title="Automatic"><i class="fas fa-cog"></i> Automatic</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 62662</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2011-nissan-juke-0b3e6ca56ba6224bb0fefca6a5ca1c15/">2011 Nissan JUKE SL</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 8928"><span class="new-price"> &#036;12,500.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=JN8AF5MV5BT027299" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center first">
                                <div class="car-image">
                                    <span class="label car-condition used">Used</span><img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bb69829863_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2004-mercedes-benz-sl-class-ad1c10abe2da3941b6d34b3bf5cec6c7/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="9390"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bb69829863_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f5dcd4660a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e2cf1be847_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3fea5a6adc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7593bc5bc7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/000c81e8c2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6b0bb4cc56_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/28c20e2314_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d2d883c13c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5d3a85bf52_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1616752ba0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/01e3cb7f17_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/15849af0a9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8854b0e487_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/77bb91761d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/be9088c4cf_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/536dc820f6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9da201abaa_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8d6f9a370b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/12e6c5005d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/51f823b06e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/81d8e47884_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4371054748_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/42a15faffc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/80cdcf99c4_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/69e8b693c9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/61db740dcd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e977bdd567_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f54a18a60f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/999714bfd6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/45c804bb06_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8612bc651d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/57ec417827_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/81092305ab_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d90e902cf0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/bdfec492b5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fcdb06ba9f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/59e201c613_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/68806cac5b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8305951b74_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/acc81f2ad8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e644225e9d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/ad8dd68091_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/69a9835f9f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a1d20bfa8e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/f19c9893f2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/4de58c0c1e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/52ecaefb29_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2004</li>
                                            <li class="car-transmission-dots" title="Automatic"><i class="fas fa-cog"></i> Automatic</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 54609</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2004-mercedes-benz-sl-class-ad1c10abe2da3941b6d34b3bf5cec6c7/">2004 Mercedes-Benz SL-Class SL 500</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 9390"><span class="new-price"> &#036;18,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=WDBSK75F34F063636" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="cd-lazy-load-item masonry-item">
                            <div class="car-item gray-bg text-center ">
                                <div class="car-image">
                                    <span class="label car-condition used">Used</span><img class="img-responsive" src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a5b8b94a1e_1024-265x190.jpg" alt="" width="265" height="190" />
                                    <div class="car-overlay-banner">
                                        <ul>
                                            <li><a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-cadillac-cts-ec5e7302be53c94f970dbeaeae775672/" data-toggle="tooltip" title="View"><i class="fas fa-link"></i></a></li>
                                            <li><a href="javascript:void(0)" data-toggle="tooltip" title="Compare" class="compare_pgs " data-id="9844"><i class="fas fa-exchange-alt"></i></a></li>
                                            <li class="pssrcset"><a href="javascript:void(0)" data-toggle="tooltip" title="Gallery" class="psimages" data-image="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a5b8b94a1e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6ee3d3e094_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/2ae8d9b322_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/35284afd45_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fabb95aac5_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/98d3090a86_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7e9ffd34b0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/068da08b41_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d63ea07d40_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/586c6d1f4a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b8e94c6640_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/e6fcd82bb9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9842572e1b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b244d9fe34_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3bb3128359_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/7f3ece1132_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/8f5c670eee_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/c8cabaf955_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a5584c50dd_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fd2d44e5b8_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/680f5d156a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1562bedcb9_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fc648f8541_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/43307ec3a0_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/a603de8c2a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/9e73be9bcb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/0808878196_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d58cfff24c_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/83c9b36e2d_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/96dc203f66_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/883bf990fb_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/b2faec6b4f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6fa01de7d1_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/87b69c2253_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/447ad39a55_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6aea606c26_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/1e4b454793_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fe94e31c47_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/297b535d67_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/792198fb3a_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/eaff0d816b_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fad7188ca6_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/956f85fb1e_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/06edc2bc33_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/08b0476022_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/d6abf0e769_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/5386e7f1fc_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/6accb3ecd3_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/3a5b6a134f_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/09d0dc82c2_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/14977c1dd7_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/fa5a74e113_1024.jpg, https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/daac8e1ad1_1024.jpg"><i class="fas fa-expand"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fas fa-calendar-alt"></i> 2013</li>
                                            <li class="car-transmission-dots" title="Automatic"><i class="fas fa-cog"></i> Automatic</li>
                                            <li><i class="glyph-icon flaticon-gas-station"></i> 45563</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="car-content">
                                    <a href="https://cardealer.potenzaglobalsolutions.com/cars/2013-cadillac-cts-ec5e7302be53c94f970dbeaeae775672/">2013 Cadillac CTS 3.6L Premium</a>
                                    <div class="separator"></div>
                                    <div class="price car-price 9844"><span class="new-price"> &#036;21,900.00</span></div>
                                    <div class="car-vehicle-review-stamps"><a href="https://www.carfax.com/cfm/ccc_DisplayHistoryRpt.cfm?partner=AMG_1&#038;VIN=1G6DS5E39D0100635" target="_blank"><img src="https://cardealer.potenzaglobalsolutions.com/wp-content/uploads/2018/07/carfax-e1584596451587.jpg" alt="carfax" /></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span id="cd-scroll-to"></span>
                </div>
            </div>
        </div>
    </section>
    <!--.product-listing-->
</div> <!-- #main .wrapper  -->
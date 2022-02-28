@extends('layouts.app')

@section('mainsection')
 <!--===========app body start===========-->
<div class="app-body">

<!--left sidebar start-->
    <div class="left-sidebar">
        <nav class="sidebar-menu">
            <ul id="nav-accordion">
                <li class="sub-menu">
                    <a href="javascript:;" class="active">
                        <i class=" ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a  href="#">Dashboard</a></li>
                        <li><a  href="#">Dashboard 2</a></li>
                        <li><a  href="dashboard-3.html">Dashboard 3</a></li>
                        <li><a  href="dashboard-4.html">Dashboard 4</a></li>
                    </ul>
                </li>

                <li class="nav-title">
                    <h5 class="text-uppercase">Components</h5>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" ti-layers"></i>
                        <span>BS Elements</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="alert.html">Alerts</a></li>
                        <li><a  href="buttons.html">Buttons</a></li>
                        <li><a  href="cards.html">Cards</a></li>
                        <li><a  href="dropdown.html">Dropdowns</a></li>
                        <li><a  href="grid.html">Grids</a></li>
                        <li><a  href="lists.html">Lists</a></li>
                        <li><a  href="modal.html">Modals</a></li>
                        <li><a  href="progress.html">Progress</a></li>
                        <li><a  href="popover-tooltips.html">Popover & Tooltips</a></li>
                        <li><a  href="typography.html">Typography</a></li>
                        <li><a  href="tabs.html">Tabs</a></li>
                        <li><a  href="tree.html">Tree</a></li>
                        <li><a  href="toastr.html">Toastr Notification</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="ti-archive"></i>
                        <span>Portlets</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="portlet-base.html">Portlets Base</a></li>
                        <li><a  href="portlet-advanced.html">Portlets Advanced</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" ti-pencil-alt"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="icon-font-awesome.html">Fontawesome Icons</a></li>
                        <li><a  href="icon-themify.html">Themify Icons</a></li>
                        <li><a  href="icon-simple-line.html">Simple line Icons</a></li>
                        <li><a  href="icon-weather.html">Weather Icons</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" ti-blackboard"></i>
                        <span>Widgets </span> <span class="badge badge-primary ml-2">2</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="widgets-base.html">Widgets Base</a></li>
                        <li><a  href="widgets-chart.html">Widgets Chart</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="icon-calendar"></i>
                        <span>Calendar </span>
                    </a>
                    <ul class="sub">
                        <li><a  href="calendar-basic.html">Basic Calendar</a></li>
                        <li><a  href="calendar-external-events.html">External Events Calendar</a></li>
                        <li><a  href="calendar-list.html">List Calendar</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" icon-speech"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="sub">
                        <li class="sub-menu">
                            <a  href="#">Form Control</a>
                            <ul class="sub">
                                <li><a  href="form-basic-input.html">Basic Input</a></li>
                                <li><a  href="form-input-group.html">Input Group</a></li>
                                <li><a  href="form-checkbox-radio.html">Checkbox & Radio</a></li>
                                <li><a  href="form-switch.html">Switch</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a  href="#">Pickers</a>
                            <ul class="sub">
                                <li><a  href="date-picker.html">Date Picker</a></li>
                                <li><a  href="datetime-picker.html">Datetime & Time Picker</a></li>
                                <li><a  href="color-picker.html">Color Picker</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a  href="#">Advanced Form</a>
                            <ul class="sub">
                                <li><a  href="form-touchspin.html">Touchpin</a></li>
                                <li><a  href="form-select2.html">Select2</a></li>
                                <li><a  href="form-input-mask.html">Input Mask</a></li>
                                <li><a  href="form-multiple-select.html"> Multiple Select</a></li>
                                <li><a  href="form-dropzone.html"> Dropzone</a></li>
                                <li><a  href="form-ion-range-slider.html"> Ion Range Slider</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a  href="#">Editos</a>
                            <ul class="sub">
                                <li><a  href="editor-summernote.html">Summernote</a></li>
                                <li><a  href="editor-markdown.html">Markdown</a></li>
                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a  href="#">Form Validation</a>
                            <ul class="sub">
                                <li><a  href="form-validation-basic.html">Basic Validation</a></li>
                                <li><a  href="form-validation-jquery.html">jQuery Validation</a></li>
                                <li><a  href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" icon-grid"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="table-basic.html">Basic Table</a></li>
                        <li class="sub-menu">
                            <a  href="#">Data Tables</a>
                            <ul class="sub">
                                <li><a  href="table-datatable.html">Basic Datatable</a></li>
                                <li><a  href="table-datatable-show-hide.html">Toggle Col Datatable</a></li>
                                <li><a  href="table-datatable-ajax.html">Ajax Datatable</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" ti-pie-chart"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="flot-chart.html">Flot Charts</a></li>
                        <li><a  href="echart.html">eCharts</a></li>
                        <li><a  href="morris-chart.html">Morris Charts</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" icon-equalizer"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="profile.html">Profile</a></li>
                        <li><a  href="search-result.html">Search Result</a></li>
                        <li><a  href="invoice.html">Invoice</a></li>
                        <li class="sub-menu">
                            <a  href="#">Sign In</a>
                            <ul class="sub">
                                <li><a  href="signin.html">Basic Sign In</a></li>
                                <li><a  href="signin-validate.html">jQuery Validate Sign In</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a  href="#">Sign Up</a>
                            <ul class="sub">
                                <li><a  href="signup.html">Basic Sign Up</a></li>
                                <li><a  href="signup-validate.html">jQuery Validate Sign Up</a></li>
                            </ul>
                        </li>
                        <li><a  href="lock-screen.html">Lock Screen</a></li>
                        <li><a  href="404-error.html">404 Error</a></li>
                    </ul>
                </li>

                <li class="nav-title">
                    <h5 class="text-uppercase">Layouts & Multi Level Menu</h5>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class=" ti-layout"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="layout-blank.html">Blank Page</a></li>
                        <li><a  href="layout-box-container.html">Box Container</a></li>
                        <li><a  href="layout-leftside-hidden.html">Leftside Hidden</a></li>
                        <li><a  href="layout-leftside-hidden-rightside-open.html">Left Hidden Rightside Open</a></li>
                        <li><a  href="layout-bothside-open.html">Bothside Open</a></li>
                        <li><a  href="layout-rightside-overlay.html">Rightside Overlay</a></li>
                        <li><a  href="layout-rightside-pushed.html">Rightside Pushed</a></li>
                        <li><a  href="layout-header-leftside-not-fixed.html">Header & Leftside not Fixed</a></li>
                        <li><a  href="layout-light-left-nav.html">Left Nav Light</a></li>
                        <li><a  href="layout-light-left-nav-alt.html">Left Nav Light Alt</a></li>
                    </ul>
                </li>

                <!--multi level menu start-->
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" ti-paint-bucket"></i>
                        <span>Multi level Menu</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="javascript:;">Menu Item 1</a></li>
                        <li class="sub-menu">
                            <a  href="#">Menu Item 2</a>
                            <ul class="sub">
                                <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                <li class="sub-menu">
                                    <a  href="javascript:;">Menu Item 3</a>
                                    <ul class="sub">
                                        <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                        <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--multi level menu end-->

                <li class="nav-title">
                    <h5 class="text-uppercase">Other Projects</h5>
                </li>

                <li>
                    <a href="index.html">
                        <i class="fa fa-dot-circle-o text-danger"></i>
                        <span>Multi-Purpose Website</span>
                    </a>
                </li>

                <li>
                    <a href="index.html">
                        <i class="fa fa-dot-circle-o text-primary"></i>
                        <span>Email Template</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fa fa-dot-circle-o text-warning"></i>
                        <span>Landing Website</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
<!--left sidebar end-->

<!--main contents start-->
    <main class="main-content">
        <!--page title start-->
        <div class="page-title">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-8">
                        <h4 class="mb-0"> Dashboard
                            <small>statistics, charts many more</small>
                        </h4>
                        <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
                            <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <div class="col-4">
                        <div class="btn-group float-right ml-2">
                            <button class="btn btn-primary btn-sm dropdown-toggle mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Settings
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Profile Settings</a>
                                <a class="dropdown-item" href="#">Data Settings</a>
                                <a class="dropdown-item" href="#">Notification Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Advanced Settings</a>
                            </div>
                        </div>

                        <div class="btn-group float-right">
                            <button class="btn btn-danger btn-sm dropdown-toggle mt-2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Quick Action
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--page title end-->


        <div class="container-fluid">

            <!--state widget start-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-4">
                    <div class="card card-shadow">
                        <div class="card-body ">
                            <i class="icon-people text-primary f30"></i>
                            <h6 class="mb-0 mt-3">New Users</h6>
                            <p class="f12 mb-0">32 New Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                    <div class="card card-shadow">
                        <div class="card-body ">
                            <i class="icon-basket-loaded text-info f30"></i>
                            <h6 class="mb-0 mt-3">Order Placed</h6>
                            <p class="f12 mb-0">123 New Order Placed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                    <div class="card card-shadow">
                        <div class="card-body ">
                            <i class=" icon-handbag text-danger f30"></i>
                            <h6 class="mb-0 mt-3">Delivery Processing</h6>
                            <p class="f12 mb-0">54 New Delivery Processing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-4">
                    <div class="card card-shadow">
                        <div class="card-body ">
                            <i class=" icon-badge text-success f30"></i>
                            <h6 class="mb-0 mt-3">Monthly Profits</h6>
                            <p class="f12 mb-0">$9887 This Month Profit <span class="float-right text-success"><i class=" ti-arrow-circle-up"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--state widget end-->

            <div class="row">
                <div class="col-md-6">
                    <div class="aws-container card-shadow aws-absolute mb-4">
                        <div class="aws-content">
                            <nav class="row">
                                <div class="col-md-4 col-12 mb-3">
                                    <strong class="text-light">Statistics Info</strong>
                                </div>
                                <div class="col-md-8 col-12 text-xl-right">
                                    <span data-btn-chart="webVisit" class="aws-active">
                                    <small>Web Visit</small>
                                    </span>
                                    <span data-btn-chart="fileDownload">
                                    <small>File Download</small>
                                    </span>
                                </div>
                            </nav>
                            <div class="aws-chart">
                                <canvas height="100"></canvas>
                            </div>
                        </div>
                        <div class="aws-details row text-center">
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="aws-block-info">
                                    <h3>
                                        <span>&nbsp;</span>
                                    </h3>
                                    <h5>
                                        <span>Total web visits (30 days)</span>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6 col-sm-6">
                                <div class="aws-block-info">
                                    <h3>
                                        <span>&nbsp;</span>%
                                    </h3>
                                    <h5>
                                        <span>Growth vs previous 30 days</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="aws-tooltip">
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                        </div>
                    </div>
                    <div class="card card-shadow mb-4">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col">
                                    <div class="ep_4" data-percent="43"><span>43</span>%</div>
                                    <div class="mt-3">Memory Used</div>
                                </div>
                                <div class="col">
                                    <div class="ep_5" data-percent="65"><span>65</span>%</div>
                                    <div class="mt-3">Processor Used</div>
                                </div>
                                <div class="col">
                                    <div class="ep_6" data-percent="77"><span>77</span>%</div>
                                    <div class="mt-3">Database Used</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col-4">
                                        <select class="form-control">
                                            <option>Choose Country</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AX">Åland Islands</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
                                            <option value="AS">American Samoa</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AO">Angola</option>
                                            <option value="AI">Anguilla</option>
                                            <option value="AQ">Antarctica</option>
                                            <option value="AG">Antigua and Barbuda</option>
                                            <option value="AR">Argentina</option>
                                            <option value="AM">Armenia</option>
                                            <option value="AW">Aruba</option>
                                            <option value="AU">Australia</option>
                                            <option value="AT">Austria</option>
                                            <option value="AZ">Azerbaijan</option>
                                            <option value="BS">Bahamas</option>
                                            <option value="BH">Bahrain</option>
                                            <option value="BD">Bangladesh</option>
                                            <option value="BB">Barbados</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia, Plurinational State of</option>
                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="BN">Brunei Darussalam</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo</option>
                                            <option value="CD">Congo, the Democratic Republic of the</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="CI">Côte d'Ivoire</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">Curaçao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
                                            <option value="EC">Ecuador</option>
                                            <option value="EG">Egypt</option>
                                            <option value="SV">El Salvador</option>
                                            <option value="GQ">Equatorial Guinea</option>
                                            <option value="ER">Eritrea</option>
                                            <option value="EE">Estonia</option>
                                            <option value="ET">Ethiopia</option>
                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FJ">Fiji</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="GF">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="TF">French Southern Territories</option>
                                            <option value="GA">Gabon</option>
                                            <option value="GM">Gambia</option>
                                            <option value="GE">Georgia</option>
                                            <option value="DE">Germany</option>
                                            <option value="GH">Ghana</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="GL">Greenland</option>
                                            <option value="GD">Grenada</option>
                                            <option value="GP">Guadeloupe</option>
                                            <option value="GU">Guam</option>
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran, Islamic Republic of</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
                                            <option value="JO">Jordan</option>
                                            <option value="KZ">Kazakhstan</option>
                                            <option value="KE">Kenya</option>
                                            <option value="KI">Kiribati</option>
                                            <option value="KP">Korea, Democratic People's Republic of</option>
                                            <option value="KR">Korea, Republic of</option>
                                            <option value="KW">Kuwait</option>
                                            <option value="KG">Kyrgyzstan</option>
                                            <option value="LA">Lao People's Democratic Republic</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LB">Lebanon</option>
                                            <option value="LS">Lesotho</option>
                                            <option value="LR">Liberia</option>
                                            <option value="LY">Libya</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MO">Macao</option>
                                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                            <option value="MG">Madagascar</option>
                                            <option value="MW">Malawi</option>
                                            <option value="MY">Malaysia</option>
                                            <option value="MV">Maldives</option>
                                            <option value="ML">Mali</option>
                                            <option value="MT">Malta</option>
                                            <option value="MH">Marshall Islands</option>
                                            <option value="MQ">Martinique</option>
                                            <option value="MR">Mauritania</option>
                                            <option value="MU">Mauritius</option>
                                            <option value="YT">Mayotte</option>
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia, Federated States of</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="MP">Northern Mariana Islands</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PW">Palau</option>
                                            <option value="PS">Palestinian Territory, Occupied</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="PR">Puerto Rico</option>
                                            <option value="QA">Qatar</option>
                                            <option value="RE">Réunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russian Federation</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="WS">Samoa</option>
                                            <option value="SM">San Marino</option>
                                            <option value="ST">Sao Tome and Principe</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SX">Sint Maarten (Dutch part)</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syrian Arab Republic</option>
                                            <option value="TW">Taiwan, Province of China</option>
                                            <option value="TJ">Tajikistan</option>
                                            <option value="TZ">Tanzania, United Republic of</option>
                                            <option value="TH">Thailand</option>
                                            <option value="TL">Timor-Leste</option>
                                            <option value="TG">Togo</option>
                                            <option value="TK">Tokelau</option>
                                            <option value="TO">Tonga</option>
                                            <option value="TT">Trinidad and Tobago</option>
                                            <option value="TN">Tunisia</option>
                                            <option value="TR">Turkey</option>
                                            <option value="TM">Turkmenistan</option>
                                            <option value="TC">Turks and Caicos Islands</option>
                                            <option value="TV">Tuvalu</option>
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom</option>
                                            <option value="US">United States</option>
                                            <option value="UM">United States Minor Outlying Islands</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN">Viet Nam</option>
                                            <option value="VG">Virgin Islands, British</option>
                                            <option value="VI">Virgin Islands, U.S.</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control">
                                            <option>Choose State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <select class="form-control">
                                            <option>Choose Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="vmap-wrap" id="world-map" style=""> </div>
                        </div>
                        <h6 class="mb-3 p-3 mt-4">Revenue Streams</h6>
                        <div class="table-responsive">
                            <table class="table">

                                <tbody>
                                <tr>
                                    <td>Europe</td>
                                    <td>ABC Ltd.</td>
                                    <td>$1999</td>
                                    <td>50%</td>
                                    <td>
                                        <span class="badge badge-pill badge-primary">High</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Australia</td>
                                    <td>XYZ Ltd.</td>
                                    <td>$2399</td>
                                    <td>60%</td>
                                    <td>
                                        <span class="badge badge-pill badge-info">Medium</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Latin America</td>
                                    <td>GEF Inc.</td>
                                    <td>$1999</td>
                                    <td>70%</td>
                                    <td>
                                        <span class="badge badge-pill badge-danger">Very High</span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card card-shadow mb-4">
                        <div class="card-body pb-0 ">
                            <div class="btn-group float-right">
                                <div class="dropdown ">
                                    <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class=" icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right ">
                                        <a class="dropdown-item" href="#"> <i class="icon-note text-info pr-2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Delete</a>
                                        <a class="dropdown-item" href="#"><i class="icon-shield text-warning pr-2"></i> Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0 ">12083</h4>
                            <p class="">New Users</p>
                        </div>
                        <div class="">
                            <canvas id="myChart-light" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-shadow mb-4">
                        <div class="card-body pb-0">
                            <div class="btn-group float-right">
                                <div class="dropdown ">
                                    <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class=" icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right ">
                                        <a class="dropdown-item" href="#"> <i class="icon-note text-info pr-2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Delete</a>
                                        <a class="dropdown-item" href="#"><i class="icon-shield text-warning pr-2"></i> Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="mb-0">234</h4>
                            <p class="">New Orders</p>
                        </div>
                        <div class="px-">
                            <canvas id="myChart-tow-light" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div class="row pt-4 pb-3">
                                <div class="col-12">
                                    <div class="float-right">
                                        <i class="f30 opacity-3 icon-basket-loaded"></i>
                                    </div>
                                    <h3 class="text-success">234</h3>
                                    <p class="card-subtitle text-muted fw-500">New Orders</p>
                                </div>
                                <div class="col-12">
                                    <div class="progress mt-3 mb-1" style="height: 6px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                                    </div>
                                    <div class="text-muted f12">
                                        <span>Progress</span>
                                        <span class="float-right">83%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--Report widget start-->
                <div class="col-md-8">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Sales Report
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="border-0 ">ID #</th>
                                    <th class="border-0">Buyers</th>
                                    <th class="border-0">Product Name</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Price</th>
                                    <th class="border-0">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>15" Mackbook Pro</td>
                                    <td>1</td>
                                    <td>$1999</td>
                                    <td>
                                        <span class="badge badge-pill badge-primary">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Szzad Tas</td>
                                    <td>iPhone X</td>
                                    <td>1</td>
                                    <td>$1299</td>
                                    <td>
                                        <span class="badge badge-pill badge-success">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Tnisha Sabrin</td>
                                    <td>27" iMack SSD</td>
                                    <td>1</td>
                                    <td>$1499</td>
                                    <td>
                                        <span class="badge badge-pill badge-danger">Cancel</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Keny Rose</td>
                                    <td>iPad Mini</td>
                                    <td>3</td>
                                    <td>$2199</td>
                                    <td>
                                        <span class="badge badge-pill badge-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jass Bery</td>
                                    <td>15" Mackbook Pro</td>
                                    <td>1</td>
                                    <td>$1999</td>
                                    <td>
                                        <span class="badge badge-pill badge-info">Processing</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>MH Geek</td>
                                    <td>Mac mini pro</td>
                                    <td>1</td>
                                    <td>$799</td>
                                    <td>
                                        <span class="badge badge-pill badge-success">Shipped</span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--Report widget end-->

                <!--social feed widget start-->
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-4">
                        <div class="card-body text-center">
                            <i class="fa fa-twitter f30 mb-3"></i>
                            <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                            <span>11 January, 2018</span>

                            <div class="mt-4">
                                <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                <span><i class="fa fa-thumbs-up "></i> 456</span>
                            </div>
                        </div>
                    </div>

                    <div class="card text-white bg-primary mb-4">
                        <div class="card-body text-center-">
                            <i class="fa fa-facebook f30 mb-3"></i>
                            <h6 class="card-title text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</h6>
                            <span class="float-left">11 January, 2018</span>

                            <div class=" float-right">
                                <span class="mr-3"><i class="fa fa-heart"></i> 234</span>
                                <span><i class="fa fa-thumbs-up "></i> 456</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--social feed widget end-->
            </div>

            <div class="row">
                <!--task widget start-->
                <div class="col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Tasks Distribution
                                <ul class="nav nav-pills nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-week-tab" data-toggle="pill" href="#pills-week" role="tab" aria-controls="pills-week" aria-selected="false">Week</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    <ul class="list-unstyled task-d-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Contrary Ipsum is not simply random text</a>
                                                            <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Ipsum has been industry's standard dummy</a>
                                                            <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#"> All the Lorem Ipsum generators</a>
                                                            <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Lorem Ipsum is not random task asign</a>
                                                            <span class="badge badge-pill badge-info">Kany Rose</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Always free from repetition injected</a>
                                                            <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Simply dummy text of the printing </a>
                                                            <span class="badge badge-pill badge-success">John Smith</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Letraset sheets containing Lorem Ipsum passages</a>
                                                            <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                    <ul class="list-unstyled task-d-list">
                                        <li class="list-mark list-primary">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Ipsum has been industry's standard dummy</a>
                                                            <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-info">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Contrary Ipsum is not simply random text</a>
                                                            <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-success">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#"> All the Lorem Ipsum generators</a>
                                                            <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-warning">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Always free from repetition injected</a>
                                                            <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-danger">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Lorem Ipsum is not random task asign</a>
                                                            <span class="badge badge-pill badge-info">Kany Rose</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-inverse">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Letraset sheets containing Lorem passages</a>
                                                            <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-mark list-primary">
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Simply dummy text of the printing </a>
                                                            <span class="badge badge-pill badge-success">John Smith</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                    <ul class="list-unstyled task-d-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Ipsum has been industry's standard dummy</a>
                                                            <span class="badge badge-pill badge-primary">Sz Tasi</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#"> All the Lorem Ipsum generators</a>
                                                            <span class="badge badge-pill badge-danger">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Contrary Ipsum is not simply random text</a>
                                                            <span class="badge badge-pill badge-secondary">MH Geek</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Lorem Ipsum is not random task asign</a>
                                                            <span class="badge badge-pill badge-info">Kany Rose</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Letraset sheets containing Lorem Ipsum passages</a>
                                                            <span class="badge badge-pill badge-warning">Jane Doe</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Always free from repetition injected</a>
                                                            <span class="badge badge-pill badge-primary">Nfisa Sabrin</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-10">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description default-color">
                                                            <a href="#">Simply dummy text of the printing </a>
                                                            <span class="badge badge-pill badge-success">John Smith</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <div class="btn-group float-right task-list-action">
                                                        <div class="dropdown ">
                                                            <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class=" icon-options"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right ">
                                                                <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                                                <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--task widget end-->

                <!--activity widget start-->
                <div class="col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                Activity Log
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                            <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                            <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="baseline baseline-border">
                                <div class="baseline-list">
                                    <div class="baseline-info">
                                        <div><a href="#" class="default-color"><strong>John Tasi</strong></a> Prepare for the Meeting <span class="badge badge-pill badge-success">status</span></div>
                                        <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                    </div>
                                </div>
                                <div class="baseline-list baseline-border baseline-primary">
                                    <div class="baseline-info">
                                        <div>Video conference to client</div>
                                        <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
                                    </div>
                                </div>
                                <div class="baseline-list  baseline-border baseline-success">
                                    <div class="baseline-info">
                                        <div><a href="#" class="default-color"><strong>Tnisha</strong></a> Submit a blog post <a href="#" class="">best admin template in 2018.</a></div>
                                        <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                    </div>
                                </div>
                                <div class="baseline-list  baseline-border baseline-warning">
                                    <div class="baseline-info">
                                        <div><a href="#" class="default-color"><strong>New Request</strong></a> 10 user request to approve or remove</div>
                                        <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                    </div>
                                </div>
                                <div class="baseline-list  baseline-border baseline-info">
                                    <div class="baseline-info">
                                        <div><a href="#" class="default-color"><strong>Mark Henry</strong></a> added your friend list now</div>
                                        <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--activity widget end-->
            </div>

            <div class="row ">
                <div class="col-xl-4 col-sm-6">
                    <div class="card mb-4">
                        <img class="card-img-top img-fluid" src="{{asset('assets/img/product_5.jpg')}}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title mb-0">2018 Best admin dashboard</h6>
                            <p class="card-text"><small class="text-muted">3 mins ago</small>
                                <a href="#" class="ml-3 default-color"><small><i class="fa fa-comments-o"></i> Comments</small></a>
                            </p>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href=" btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card  mb-4">
                        <div class="card-header text-white bg-success border-0">
                            <div class="media p-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user.png')}}" alt="John Doe" style="width: 64px; height: 64px;">
                                <div class="media-body">
                                    <p class="f18 mb-0"><strong class="">John Doe</strong></p>
                                    <p>john_doe@testmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="quick-links-grid">
                                <a href="#" class="ql-grid-item">
                                    <i class="icon-layers text-primary"></i>
                                    <span class="ql-grid-title">Recent Activity</span>
                                </a>
                                <a href="#" class="ql-grid-item">
                                    <i class=" icon-envelope-open text-success"></i>
                                    <span class="ql-grid-title">Mail Inbox</span>
                                </a>
                            </div>
                            <div class="quick-links-grid">
                                <a href="#" class="ql-grid-item">
                                    <i class="ti-files text-warning"></i>
                                    <span class="ql-grid-title">Message</span>
                                </a>
                                <a href="#" class="ql-grid-item">
                                    <i class="icon-bell text-info"></i>
                                    <span class="ql-grid-title">Notification</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer text-center bg-white p-4">
                            <div class="row">
                                <div class="col">
                                    <h4>24</h4>
                                    <span>Projects</span>
                                </div>
                                <div class="col">
                                    <h4>3535</h4>
                                    <span>Follower</span>
                                </div>
                                <div class="col">
                                    <h4>123</h4>
                                    <span>Following</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header">
                            <div class="card-title">
                                New Users
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Assign</a>
                                            <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Remove</a>
                                            <a class="dropdown-item" href="#"><i class="icon-note text-warning pr-2"></i> Done</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user1.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">John Doe</strong></p>
                                    <span>john_doe@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user2.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">Tnisha Sabrin</strong></p>
                                    <span>tnisha_s@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user3.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">Tasi Szzd</strong></p>
                                    <span>tasi_szd@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user4.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">Keny Rose</strong></p>
                                    <span>keny_ose@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-4">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user5.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">MH Geek</strong></p>
                                    <span>mh_g@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media ">
                                <img class="align-self-center mr-3 rounded-circle" src="{{asset('assets/img/user2.png')}}" alt=" " style="width: 50px; height: 50px;">
                                <div class="media-body">
                                    <p class="mb-0"><strong class="">Tnisha Sabrin</strong></p>
                                    <span>tnisha_s@testmail.com</span>
                                </div>
                                <div class="btn-group float-right task-list-action">
                                    <div class="dropdown ">
                                        <a href="#" class="btn btn-transparent gray-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class=" icon-options"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right ">
                                            <a class="dropdown-item" href="#"> <i class="icon-user text-info pr-2"></i> Follow</a>
                                            <a class="dropdown-item" href="#"> <i class=" icon-user-unfollow text-danger pr-2"></i> Un Follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<!--main contents end-->
</div>
<!--===========app body end===========-->
@endsection

@section('script')

<!-- Placed js at the end of the page so the pages load faster -->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/vendor/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/vendor/lobicard/js/lobicard.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.scrollTo.min.js')}}"></script>

    <!--chartjs-->
    <script src="{{asset('assets/vendor/chartjs/Chart.min.js')}}"></script>
    <!--chartjs initialization-->
    <script src="{{asset('assets/vendor/index-chartjs-init.js')}}"></script>


    <!--custom chart-->
    <script src="{{asset('assets/vendor/custom-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/underscore-min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/custom-chart/accounting.min.js')}}"></script>
    <!--custom chart init-->
    <script src="{{asset('assets/vendor/custom-chart/custom-chart-init.js')}}"></script>


    <!--easy pie chart-->
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js')}}"></script>

    <!--vectormap-->
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendor/vmap-init.js')}}"></script>


    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="{{asset('assets/js/scripts.js')}}"></script>

@endsec
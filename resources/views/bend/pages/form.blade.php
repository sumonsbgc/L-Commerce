<div class="app-title">
    <div>
        <h1><i class="fa fa-edit"></i> Custom Form Elements</h1>
        <p>Customized form elements</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item"><a href="#">Custom Componants</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Animated Checkbox and Radio Buttons</h3>
            <!--Radio Button Markup-->
            <div class="animated-radio-button">
                <label>
                    <input type="radio"><span class="label-text">Radio Button</span>
                </label>
            </div>
            <!--Checkbox Markup-->
            <div class="animated-checkbox">
                <label>
                    <input type="checkbox"><span class="label-text">Checkbox</span>
                </label>
            </div>
            <h4>Disabled state</h4>
            <div class="animated-radio-button">
                <label>
                    <input type="radio" disabled=""><span class="label-text">Radio Button</span>
                </label>
            </div>
            <div class="animated-checkbox">
                <label>
                    <input type="checkbox" disabled=""><span class="label-text">Checkbox</span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Animated Toggle Button</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><b>Toggle Button</b></p>
                    <div class="toggle">
                        <label>
                            <input type="checkbox"><span class="button-indecator"></span>
                        </label>
                    </div>
                    <div class="toggle lg">
                        <label>
                            <input type="checkbox"><span class="button-indecator"></span>
                        </label>
                    </div>
                    <h5>Disabled state</h5>
                    <div class="toggle">
                        <label>
                            <input type="checkbox" disabled=""><span class="button-indecator"></span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <p><b>Fliping Toggle Button</b></p>
                    <div class="toggle-flip">
                        <label>
                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON"
                                data-toggle-off="OFF"></span>
                        </label>
                    </div>
                    <h5>Disabled state</h5>
                    <div class="toggle-flip">
                        <label>
                            <input type="checkbox" disabled=""><span class="flip-indecator" data-toggle-on="ON"
                                data-toggle-off="OFF"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Select2</h3>
                <p><a class="btn btn-primary icon-btn" href="https://select2.github.io/examples.html" target="_blank"><i
                            class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
                <p>This plugin can be used to convert select element into advanced componant.</p>
                <h4>Demo</h4>
                <select class="form-control" id="demoSelect" multiple="">
                    <optgroup label="Select Cities">
                        <option>Ahmedabad</option>
                        <option>Surat</option>
                        <option>Vadodara</option>
                        <option>Rajkot</option>
                        <option>Bhavnagar</option>
                        <option>Jamnagar</option>
                        <option>Gandhinagar</option>
                        <option>Nadiad</option>
                        <option>Morvi</option>
                        <option>Surendranagar</option>
                        <option>Junagadh</option>
                        <option>Gandhidham</option>
                        <option>Veraval</option>
                        <option>Ghatlodiya</option>
                        <option>Bharuch</option>
                        <option>Anand</option>
                        <option>Porbandar</option>
                        <option>Godhra</option>
                        <option>Navsari</option>
                        <option>Dahod</option>
                        <option>Botad</option>
                        <option>Kapadwanj</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Date Picker</h3>
                <p><a class="btn btn-primary icon-btn"
                        href="http://bootstrap-datepicker.readthedocs.org/en/stable/options.html" target="_blank"><i
                            class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
                <p>This plugin can be used to let the user select the date in a convinient way.</p>
                <h4>Demo</h4>
                <input class="form-control" id="demoDate" type="text" placeholder="Select Date">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">Bootstrap Notify</h3>
                <p><a class="btn btn-primary icon-btn" href="http://bootstrap-notify.remabledesigns.com/"
                        target="_blank"><i class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
                <p>This plugin can be used to notify user about status of some action which he has performed.</p>
                <h4>Demo</h4><a class="btn btn-info" id="demoNotify" href="#">Sample Notification</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <div class="tile-title-w-btn">
                <h3 class="title">SweetAlert</h3>
                <p><a class="btn btn-primary icon-btn" href="http://t4t5.github.io/sweetalert/" target="_blank"><i
                            class="fa fa-file"></i>Docs</a></p>
            </div>
            <div class="tile-body">
                <p>This plugin can be used as the replacement of native javascript alert, confirm and prompt
                    functions.</p>
                <h4>Demo</h4><a class="btn btn-info" id="demoSwal" href="#">Sample Alert</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Vertical Form</h3>
            <div class="tile-body">
                <form>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input class="form-control" type="text" placeholder="Enter full name">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="email" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Gender</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender">Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender">Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Identity Proof</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">I accept the terms and conditions
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tile-footer">
                <button class="btn btn-primary" type="button"><i
                        class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                    class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="tile">
            <h3 class="tile-title">Register</h3>
            <div class="tile-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="control-label col-md-3">Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-8">
                            <input class="form-control col-md-8" type="email" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Gender</label>
                        <div class="col-md-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender">Male
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender">Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Identity Proof</label>
                        <div class="col-md-8">
                            <input class="form-control" type="file">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8 col-md-offset-3">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">I accept the terms and
                                    conditions
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tile-footer">
                <div class="row">
                    <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="button"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearix"></div>
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Subscribe</h3>
            <div class="tile-body">
                <form class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label">Name</label>
                        <input class="form-control" type="text" placeholder="Enter your name">
                    </div>
                    <div class="form-group col-md-3">
                        <label class="control-label">Email</label>
                        <input class="form-control" type="text" placeholder="Enter your email">
                    </div>
                    <div class="form-group col-md-4 align-self-end">
                        <button class="btn btn-primary" type="button"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@extends('inc.layout')
@section('title','Toastr')
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc.breadcrumb',['bcrumb' => 'bc_level_dua','bc_1'=>'Notifications'])
        <div class="subheader">
            @component('inc.subheader',['subheader_title'=>'st_type_5'])
                @slot('sh_icon') exclamation-circle @endslot
                @slot('sh_titile_main') Toastr <sup class='badge badge-primary fw-500'>ADDON</sup> @endslot
                @slot('sh_descipt') Simple to use, lightweight notification plugin @endslot
            @endcomponent            
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">About</span>
                        <p>Toastr is a Javascript library for Gnome / Growl type non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.</p>
                        <p class="m-0">
                            Find in-depth, guidelines, tutorials and more on Toastr's <a href="https://github.com/CodeSeven/toastr" target="_blank">Official Documentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Toast <span class="fw-300"><i>Modifier</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Below you will find various toast settings you can play around with. The Settings log will produce the outcome code for the execution
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="form-group">
                                        <label class="form-label" for="title">Title</label>
                                        <input type="text" class="form-control" id="title" placeholder="Enter a title ...">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="message">Message</label>
                                        <textarea class="form-control" id="message" rows="5" placeholder="Enter a message ..."></textarea>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="closeButton">
                                        <label class="custom-control-label" for="closeButton">Close Button</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="addBehaviorOnToastClick">
                                        <label class="custom-control-label" for="addBehaviorOnToastClick">Add behavior on toast click</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="debugInfo">
                                        <label class="custom-control-label" for="debugInfo">Debug</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="progressBar" checked>
                                        <label class="custom-control-label" for="progressBar">Progress Bar</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="preventDuplicates" checked>
                                        <label class="custom-control-label" for="preventDuplicates">Prevent Duplicates</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="addClear">
                                        <label class="custom-control-label" for="addClear">Add button to force clearing a toast, ignoring focus</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="custom-control-input" id="newestOnTop" checked>
                                        <label class="custom-control-label" for="newestOnTop">Newest on top</label>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <fieldset class="form-group" id="toastTypeGroup">
                                        <label>
                                            <strong>Toast Type</strong>
                                        </label>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input " name="toasts" id="typesuccess" type="radio" value="success" checked>
                                            <label class="custom-control-label" for="typesuccess"> Success </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input " name="toasts" id="typeinfo" type="radio" value="info">
                                            <label class="custom-control-label" for="typeinfo"> Info </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="toasts" id="typewarning" type="radio" value="warning">
                                            <label class="custom-control-label" for="typewarning"> Warning </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="toasts" id="typeerror" type="radio" value="error">
                                            <label class="custom-control-label" for="typeerror"> Error </label>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group" id="positionGroup">
                                        <label>
                                            <strong>Position</strong>
                                        </label>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="topright" type="radio" value="toast-top-right" checked>
                                            <label class="custom-control-label" for="topright"> Top Right </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="bottomright" type="radio" value="toast-bottom-right">
                                            <label class="custom-control-label" for="bottomright"> Bottom Right </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="bottomleft" type="radio" value="toast-bottom-left">
                                            <label class="custom-control-label" for="bottomleft"> Bottom Left </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="topleft" type="radio" value="toast-top-left">
                                            <label class="custom-control-label" for="topleft"> Top Left </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="topfullwidth" type="radio" value="toast-top-full-width">
                                            <label class="custom-control-label" for="topfullwidth"> Top Full Width </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="bottomfullwidth" type="radio" value="toast-bottom-full-width">
                                            <label class="custom-control-label" for="bottomfullwidth"> Bottom Full Width </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="topcenter" type="radio" value="toast-top-center">
                                            <label class="custom-control-label" for="topcenter"> Top Center </label>
                                        </div>
                                        <div class="custom-control custom-radio mb-2">
                                            <input class="custom-control-input" name="position" id="bottomcenter" type="radio" value="toast-bottom-center">
                                            <label class="custom-control-label" for="bottomcenter"> Bottom Center </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group">
                                        <label class="form-label" for="showDuration">Show Duration</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="number" class="form-control" id="showDuration" placeholder="ms" value="300">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    ms
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="hideDuration">Hide Duration</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="number" class="form-control" id="hideDuration" placeholder="ms" value="100">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    ms
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="timeOut">Timeout</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="number" class="form-control" id="timeOut" placeholder="ms" value="5000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    ms
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="extendedTimeOut">Extended time out</label>
                                        <div class="input-group flex-nowrap">
                                            <input type="number" class="form-control" id="extendedTimeOut" placeholder="ms" value="1000">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    ms
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2">
                                    <div class="form-group">
                                        <label class="form-label" for="showEasing">Show Easing</label>
                                        <input type="text" class="form-control" id="showEasing" placeholder="swing, linear" value="swing">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="hideEasing">Hide Easing</label>
                                        <input type="text" class="form-control" id="hideEasing" placeholder="swing, linear" value="linear">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="showMethod">Show Method</label>
                                        <input type="text" class="form-control" id="showMethod" placeholder="show, fadeIn, slideDown" value="fadeIn">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="hideMethod">Hide Method</label>
                                        <input type="text" class="form-control" id="hideMethod" placeholder="hide, fadeOut, slideUp" value="fadeOut">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div style='margin-top: 25px;'>
                                <pre id='toastr-log' class="alert alert-primary h-auto my-3 w-100 h-auto p-3">Settings:</pre>
                            </div>
                        </div>
                        <div class="panel-content py-3 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0">
                            <button class="btn btn-primary mr-1" type="button" id="showtoast"> Open Toast </button>
                            <button class="btn btn-outline-primary mr-1" type="button" id="clearlasttoast"> Clear Last Toast </button>
                            <button class="btn btn-outline-primary mr-1" type="button" id="cleartoasts"> Clear All Toasts </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('plugin')
        <script src="/js/notifications/toastr/toastr.js"></script>
        <script>
            $(document).ready(function()
            {

                var i = -1;
                var toastCount = 0;
                var $toastlast;

                var getMessage = function()
                {
                    var msgs = [
                        'My name is Inigo Montoya. You killed my father. Prepare to die!',
                        'Are you the six figured man?',
                        'Inconceivable!',
                        'I do not think that means what you think it means.',
                        'Have fun storming the castle!'
                    ];
                    i++;
                    if (i === msgs.length)
                    {
                        i = 0;
                    }

                    return msgs[i];
                };

                var getMessageWithClearButton = function(msg)
                {
                    msg = msg ? msg : 'Clear itself?';
                    msg += '<br /><br /><button type="button" class="btn clear">Yes</button>';
                    return msg;
                };

                $('#closeButton').click(function()
                {
                    if ($(this).is(':checked'))
                    {
                        $('#addBehaviorOnToastCloseClick').prop('disabled', false);
                    }
                    else
                    {
                        $('#addBehaviorOnToastCloseClick').prop('disabled', true);
                        $('#addBehaviorOnToastCloseClick').prop('checked', false);
                    }
                });

                $('#showtoast').click(function()
                {
                    var shortCutFunction = $("#toastTypeGroup input:radio:checked").val();
                    var msg = $('#message').val();
                    var title = $('#title').val() || '';
                    var $showDuration = $('#showDuration');
                    var $hideDuration = $('#hideDuration');
                    var $timeOut = $('#timeOut');
                    var $extendedTimeOut = $('#extendedTimeOut');
                    var $showEasing = $('#showEasing');
                    var $hideEasing = $('#hideEasing');
                    var $showMethod = $('#showMethod');
                    var $hideMethod = $('#hideMethod');
                    var toastIndex = toastCount++;
                    var addClear = $('#addClear').prop('checked');

                    toastr.options = {
                        closeButton: $('#closeButton').prop('checked'),
                        debug: $('#debugInfo').prop('checked'),
                        newestOnTop: $('#newestOnTop').prop('checked'),
                        progressBar: $('#progressBar').prop('checked'),
                        rtl: $('#rtl').prop('checked'),
                        positionClass: $('#positionGroup input:radio:checked').val() || 'toast-top-right',
                        preventDuplicates: $('#preventDuplicates').prop('checked'),
                        onclick: null
                    };

                    if ($('#addBehaviorOnToastClick').prop('checked'))
                    {
                        toastr.options.onclick = function()
                        {
                            alert('You can perform some custom action after a toast goes away');
                        };
                    }

                    if ($('#addBehaviorOnToastCloseClick').prop('checked'))
                    {
                        toastr.options.onCloseClick = function()
                        {
                            alert('You can perform some custom action when the close button is clicked');
                        };
                    }

                    if ($showDuration.val().length)
                    {
                        toastr.options.showDuration = parseInt($showDuration.val());
                    }

                    if ($hideDuration.val().length)
                    {
                        toastr.options.hideDuration = parseInt($hideDuration.val());
                    }

                    if ($timeOut.val().length)
                    {
                        toastr.options.timeOut = addClear ? 0 : parseInt($timeOut.val());
                    }

                    if ($extendedTimeOut.val().length)
                    {
                        toastr.options.extendedTimeOut = addClear ? 0 : parseInt($extendedTimeOut.val());
                    }

                    if ($showEasing.val().length)
                    {
                        toastr.options.showEasing = $showEasing.val();
                    }

                    if ($hideEasing.val().length)
                    {
                        toastr.options.hideEasing = $hideEasing.val();
                    }

                    if ($showMethod.val().length)
                    {
                        toastr.options.showMethod = $showMethod.val();
                    }

                    if ($hideMethod.val().length)
                    {
                        toastr.options.hideMethod = $hideMethod.val();
                    }

                    if (addClear)
                    {
                        msg = getMessageWithClearButton(msg);
                        toastr.options.tapToDismiss = false;
                    }
                    if (!msg)
                    {
                        msg = getMessage();
                    }

                    $('#toastr-log').text('Command: toastr["' +
                        shortCutFunction +
                        '"]("' +
                        msg +
                        (title ? '", "' + title : '') +
                        '")\n\ntoastr.options = ' +
                        JSON.stringify(toastr.options, null, 2)
                    );

                    var $toast = toastr[shortCutFunction](msg, title); // Wire up an event handler to a button in the toast, if it exists
                    $toastlast = $toast;

                    if (typeof $toast === 'undefined')
                    {
                        return;
                    }

                    if ($toast.find('#okBtn').length)
                    {
                        $toast.delegate('#okBtn', 'click', function()
                        {
                            alert('you clicked me. i was toast #' + toastIndex + '. goodbye!');
                            $toast.remove();
                        });
                    }
                    if ($toast.find('#surpriseBtn').length)
                    {
                        $toast.delegate('#surpriseBtn', 'click', function()
                        {
                            alert('Surprise! you clicked me. i was toast #' + toastIndex + '. You could perform an action here.');
                        });
                    }
                    if ($toast.find('.clear').length)
                    {
                        $toast.delegate('.clear', 'click', function()
                        {
                            toastr.clear($toast,
                            {
                                force: true
                            });
                        });
                    }
                });

                function getLastToast()
                {
                    return $toastlast;
                }
                $('#clearlasttoast').click(function()
                {
                    toastr.clear(getLastToast());
                });
                $('#cleartoasts').click(function()
                {
                    toastr.clear();
                });

            });

        </script>
@endsection

<?php

/** @var yii\web\View $this */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$this->title = 'My Yii Application';
?>

<div class="site-index">
    <header class="">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav '],
            'items' => [
                Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
                ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                        'Logout (' . explode("@", Yii::$app->user->identity->email)[0] . ')',
                        ['class' => 'text-gray-400']
                    )
                    . Html::endForm()
                    . '</li>'
                )
            ],
        ]);
        NavBar::end();
        ?>
    </header>
    <div class="container" style="background:#fafafa; height: calc(100vh - 160px)">
    <div class="w-full h-full">
        <div class="text-center text-lg font-bold mt-3 mb-10">What kind of pets have you had?</div>

        <div class="relative px-4 py-2 w-full max-w-xl border border-gray-500 rounded-md mx-auto">
            <div class="text-2xl font-bold relative flex justify-between" style="top: -24px;">
                <div style="background:#fafafa;">
                    Kind of Petsss
                </div>
                <div class="grid grid-cols-4 gap-4" id="top_bar_events">
                </div>
            </div>
            <div class="-mt-4 mb-1 ml-1 mr-1">
                <div class="text-red-500 mb-1 hidden" id="conform-text">
                    <div class="flex">
                        Are you sure want to delete ?#1843 
                        <svg onclick="extra_info(true, 'conform-text')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer text-emerald-500 ml-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <svg onclick="extra_info(false, 'conform-text')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer ml-2">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="text-cyan-500 mb-1 hidden" id="info-text">
                    <div class="flex">
                    Search By Specific Entity #1756 aa
                        <svg onclick="extra_info(false, 'info-text')" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 cursor-pointer ml-2 text-gray-400">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div id="active_pets_container" class=" border border-gray-500 rounded p-1 bg-white flex flex-wrap gap-1.5 py-2 overflow-y-auto" style="max-height: 120px;">
            </div>
            </div>
            <input type="text" class="w-full p-2 border rounded my-2 hidden" id="search_text" placeholder="Enter min 3 characters">

            <div class="rounded border bg-white w-full p-2 hidden" id="search_container">
                <div class="text-lg">Total Option: <span id="total_serach"></span></div>
                <div class="flex gap-3 my-2">
                    <div class="p-2 bg-gray-200 rounded cursor-pointer hover:bg-gray-300" onclick="all_clicked('search_check', 'select_all')"><input type="checkbox" name="" id="select_all"> Select All</div>
                    <div class="p-2 bg-gray-200 rounded cursor-pointer hover:bg-gray-300" onclick="clear_all()"><input type="checkbox" name="" id=""> Clear All</div>
                </div>
                <ul class="w-full serach_content" style="max-height: 200px;" id="ul_search">
                    <li class="w-full flex align-center gap-2 pl-2 cursor-pointer">
                        <input type="checkbox" name="" id="">
                        <img src="https://www.mylokalfresh.com/uploads/dog2.jpg" class="w-7 h-7 p-.5 mt-1.5 rounded-full" alt="">
                        <div class="">
                            <p class="font-bold -mb-2" style="font-size: 18px;">dog-abc-1</p>
                            <small class="text-xs">nuwakot</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="error_message" class="text-xl font-bold text-red-500 hidden"></div>
        </div>
    </div>
    </div>
</div>
    <div class="footer px-2" style="width: 100vw;background-color: #f5f5f5; height: 90px;">
        <div class="container">
            <div class="w-96 p-3 text-muted ">
                <p>Globalbizsoft </p>
                <p class="flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mt-.5"> <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" /> </svg> 17420 NE 119TH Way, Redmond, WA 98052</p>
                <p class="flex"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mt-.5"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" /> </svg> +14083733167</p>
            </div>
        </div>
    </div>

<script>
    var pets = {}
    var active = []

    var active_event_type = ""
    function get() {
        $("#active_pets_container").html("");
        $("#error_message").hide()
        $("#search_container").hide()
        $("#search_text").hide()
        active = [];
        active_event_type = ""
        $.ajax({
            url: '/pets/get', 
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if(response.result == 0){
                    return
                }
                response.pets.forEach(element => {
                    active.push(element.id);
                    append_to_active(element.id, element.imageFile, element.name, element.location, "");
                });

            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
        update_state_top_bar();
    }

    function append_to_active(id, imageFile, name, location, extra_class){
        $("#active_pets_container").append(`
            <div class="px-2 bg-gray-100 rounded border border-black flex gap-2 ${extra_class}">
                <input type="checkbox" checked class="${active_event_type != 'edit'? "hidden": ""} active_check" onclick="handleClick(this)" data-extra="${id}" id="${id}-active-container">
                <img src="${imageFile}" class="w-8 h-8 p-.5 mt-1.5 rounded-full" alt="">
                <div class="">
                    <p class="font-bold -mb-2" style="font-size: 18px;">${name}</p>
                    <small class="text-xs">${location}</small>
                </div>
            </div>
        `);
    }

    function active_inactive_list_check_box(id, bol){
        $(`#${id}-active-container`).prop("checked", bol);
        $(`#${id}-search-container-item`).prop("checked", bol);
    }

    function clear_all(){
        $("#select_all").prop("checked", true);
        all_clicked('search_check', 'select_all');
        $("#search_container").hide();
    }

    function handleClick(element) {
        if(!$("#update_pets").length){
            $("#top_bar_events").prepend(event_render("save"));
        }
        var id = $(element).data('extra');
        if($(element).is(':checked')) {
            active_inactive_list_check_box(id, true);
            if(!$(`#${id}-active-container`).length){
                append_to_active(pets[id].id, pets[id].imageFile, pets[id].name, pets[id].location, "new_active");
            }
            if(!active.includes(id)){
                active.push(id)
            }
        } else {
            active_inactive_list_check_box(id, false);
            curr_index = active.findIndex(x => x == id);
            if(curr_index != -1){
                active.splice(curr_index, 1);
            }
        }
        select_all_update_check_box();
        check_if_all_active();
    }
    


    function select_all_update_check_box(){
        var has_some_not_cheked = false
        $('.search_check').each(function(){
            if (!$(this).is(':checked')){
                has_some_not_cheked = true
                return false;
            }
        });
        if(has_some_not_cheked){
            $("#select_all").prop("checked", false)
        }else{
            $("#select_all").prop("checked", true)
        }
    }
        

    function toggle_checkbox_class_active_element(bol){
        if(bol){
            $('.active_check').removeClass('hidden');
            $("#search_text").removeClass('hidden');
            $("#ul_search").removeClass('hidden');
            return
        }
        $('.active_check').addClass('hidden');
        $("#search_text").addClass('hidden');
        $("#ul_search").addClass('hidden');
    }

    function edit_start(){
        active_event_type = "edit"
        toggle_checkbox_class_active_element(1)
        update_state_top_bar();
    }

    function edit_stop(){
        active_event_type = ""
        toggle_checkbox_class_active_element(0)
        update_state_top_bar();
    }

    function check_if_all_active(){
        // console.log($('#active_pets_container').children().length, active.length);
        if ($('#active_pets_container').children().length != active.length){
            $('#all').prop('checked', false);
        }else{
            $('#all').prop('checked', true);
        }
    }

    function all_clicked(check_class, check_id){
        var is_checked = $(`#${check_id}`).is(':checked');
        $(`.${check_class}`).each(function(){
            if ($(this).prop('checked') == is_checked) {
                $(this).click();
            }
        });

    }

    function extra_info(del, id){
        if(del){
            active = []
            update_pets()
        }

        $(`#${id}`).toggle()
    }


    function update_pets(){
        $.ajax({
            url: '/pets/update', 
            type: 'POST',
            dataType: 'json',
            data: {
                _csrf: $('meta[name="csrf-token"]').attr('content'),
                pets: active
            },
            success: function(response) {
                if(!response.result){
                    return
                }
                get();
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }


    $('#search_text').on('input', function() {
        $("#error_message").hide()
        $("#search_container").hide()
        var inputValue = $(this).val();
        if (inputValue.length >= 3) {
            display_search_q_c(inputValue)
        }
    });

    function heighlight_func(text, sep){
        if(text == sep){
            return `<span class='text-red-500'>${text}</span>`
        }

        chunks = text.split(sep)
        raw = ""
        chunks.forEach(chunk => {
            if(chunk == ''){
                raw += `<span class='text-red-500'>${sep}</span>`
            }else{
                raw += `<span>${chunk}</span>`
            }
        });

        return raw
    }

    function display_search_q_c(query){
        $("#ul_search").html("")
        $.ajax({
        url: `/pets/search?query=${query}`, 
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if(response.result == 0){
                $("#search_container").hide()
                return 
            }
            if(response.pets.length == 0){
                $("#error_message").show();
                $("#error_message").text("0 pets found!")
                return
            }
            $("#total_serach").text(response.pets.length)
            response.pets.forEach(element => {
                pets[element.id] = element;
                $("#ul_search").append(`
                    <li class="w-full flex align-center gap-2 pl-2 cursor-pointer">
                        <input type="checkbox" ${active.includes(element.id)? "checked": ""} name="" class="search_check" onclick="handleClick(this)" data-extra="${element.id}" id="${element.id}-search-container-item">
                        <img src="${element.imageFile}" class="w-7 h-7 p-.5 mt-1.5 rounded-full" alt="">
                        <div class="">
                            <p class="font-bold -mb-2" style="font-size: 18px;">${heighlight_func(element.name, query)}</p>
                            <small class="text-xs">${element.location}</small>
                        </div>
                    </li>
                `);
            });

            $("#search_container").show()
        },
        error: function(xhr, status, error) {
            $("#search_container").hide()
            console.error('Error:', error);
        }
    });
    }

    function event_render(event_type){
        switch (event_type) {
            case "edit":
                return `
                    <svg onclick="edit_start()" id="edit_button" style="background:#fafafa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-blue-500 cursor-pointer">
                        <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                        <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
                    </svg>
                `;
            case "trash":
                return `
                    <svg onclick="extra_info(false, 'conform-text')" style="background:#fafafa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-red-500 cursor-pointer">
                        <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                    </svg>
                `;
            case "remove":
                return `
                    <svg onclick="edit_stop()" style="background:#fafafa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-red-500 cursor-pointer">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                `;
            case "all":
                return `
                    <span onclick="all_clicked('active_check', 'all')" class="text-md font-medium cursor-default" style="background:#fafafa;"><input type="checkbox"   checked id="all"> All</span>
                `;
            case "info":
                return `
                    <svg onclick="extra_info(false, 'info-text')" style="background:#fafafa;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-gray-500 cursor-pointer">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>
                `;

            case "save":
                return `
                    <svg onclick="update_pets()" style="background:#fafafa;" id="update_pets" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 text-green-500 cursor-pointer">
                        <path fill-rule="evenodd" d="M10.5 3A1.501 1.501 0 0 0 9 4.5h6A1.5 1.5 0 0 0 13.5 3h-3Zm-2.693.178A3 3 0 0 1 10.5 1.5h3a3 3 0 0 1 2.694 1.678c.497.042.992.092 1.486.15 1.497.173 2.57 1.46 2.57 2.929V19.5a3 3 0 0 1-3 3H6.75a3 3 0 0 1-3-3V6.257c0-1.47 1.073-2.756 2.57-2.93.493-.057.989-.107 1.487-.15Z" clip-rule="evenodd" />
                    </svg>
                `;
        }
    }

    function update_state_top_bar(){
        var top_bar_events = $("#top_bar_events");
        top_bar_events.html("");
        switch (active_event_type) {
            case "edit":
                top_bar_events.append(event_render("all"));
                top_bar_events.append(event_render("remove"));
                top_bar_events.append(event_render("info"));
                check_if_all_active();
                $("#search_text").show()
                break;
            default:
                top_bar_events.append(event_render("trash"));
                top_bar_events.append(event_render("edit"));
                top_bar_events.append(event_render("info"));
                break;
        }
    }

    get();
</script>

<style>
    @media (min-width: 1200px){
        .container, .container-sm, .container-md, .container-lg, .container-xl {
            max-width: 1140px;
        }
    }
    .nav-link {
        color: white !important;
    }
    .collapse {
        visibility: initial !important;
    }
    .navbar-toggler-icon{
        color: white !important;
    }
    .serach_content li { background: white; }
    .serach_content li:nth-child(odd) { background: #ececfc; }
    .new_active{
        background-color: lightgreen !important;
    }
</style>
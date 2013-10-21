//for each dropdown     
$(document).on('change', '#patient-form #Patient_confirmedmutation', function() {
    if ($(this).val() == 'Yes')
    {
        $('#patient-form #Patient_confirmedby').show();
        $('#patient-form #Patient_confirmedby').prev().show();

    }
    else
    {
        $('#patient-form #Patient_confirmedby').hide();
        $('#patient-form #Patient_confirmedby').prev().hide();
    }

});

//children field
$(document).on('change', '#patient-form #Patient_children', function() {
    if ($(this).val() == 'Yes')
    {
        $('#patient-form #Patient_numberofchildrenaffected').show();
        $('#patient-form #Patient_numberofchildrenaffected').prev().show();
        $('#patient-form #Patient_numberofchildrennonaffected').show();
        $('#patient-form #Patient_numberofchildrennonaffected').prev().show();
        $('#patient-form #Patient_numberofchildrenunknownstatus').show();
        $('#patient-form #Patient_numberofchildrenunknownstatus').prev().show();

    }
    else
    {
        $('#patient-form #Patient_numberofchildrenaffected').hide();
        $('#patient-form #Patient_numberofchildrenaffected').prev().hide();
        $('#patient-form #Patient_numberofchildrennonaffected').hide();
        $('#patient-form #Patient_numberofchildrennonaffected').prev().hide();
        $('#patient-form #Patient_numberofchildrenunknownstatus').hide();
        $('#patient-form #Patient_numberofchildrenunknownstatus').prev().hide();
    }

});

//siblings field
$(document).on('change', '#patient-form #Patient_siblings', function() {
    if ($(this).val() == 'Yes')
    {
        $('#patient-form #Patient_numberofsiblingsaffected').show();
        $('#patient-form #Patient_numberofsiblingsaffected').prev().show();
        $('#patient-form #Patient_numberofsiblingsnotaffected').show();
        $('#patient-form #Patient_numberofsiblingsnotaffected').prev().show();
        $('#patient-form #Patient_numberofsiblingsunknown').show();
        $('#patient-form #Patient_numberofsiblingsunknown').prev().show();

    }
    else
    {
        $('#patient-form #Patient_numberofsiblingsaffected').hide();
        $('#patient-form #Patient_numberofsiblingsaffected').prev().hide();
        $('#patient-form #Patient_numberofsiblingsnotaffected').hide();
        $('#patient-form #Patient_numberofsiblingsnotaffected').prev().hide();
        $('#patient-form #Patient_numberofsiblingsunknown').hide();
        $('#patient-form #Patient_numberofsiblingsunknown').prev().hide();
    }

});

//twins field
$(document).on('change', '#patient-form #Patient_twins', function() {
    if ($(this).val() == 'Yes')
    {
        $('#patient-form #Patient_numberoftwinsaffected').show();
        $('#patient-form #Patient_numberoftwinsaffected').prev().show();
        $('#patient-form #Patient_numberoftwinsnotaffected').show();
        $('#patient-form #Patient_numberoftwinsnotaffected').prev().show();
        $('#patient-form #Patient_numberoftwinsunknown').show();
        $('#patient-form #Patient_numberoftwinsunknown').prev().show();

    }
    else
    {
        $('#patient-form #Patient_numberoftwinsaffected').hide();
        $('#patient-form #Patient_numberoftwinsaffected').prev().hide();
        $('#patient-form #Patient_numberoftwinsnotaffected').hide();
        $('#patient-form #Patient_numberoftwinsnotaffected').prev().hide();
        $('#patient-form #Patient_numberoftwinsunknown').hide();
        $('#patient-form #Patient_numberoftwinsunknown').prev().hide();
    }

});


//for each form
$(document).ready(function() {

    //hide all that need to be hidden
    $('#patient-form #Patient_confirmedby').hide();
    $('#patient-form #Patient_confirmedby').prev().hide();

    //children
    $('#patient-form #Patient_numberofchildrenaffected').hide();
    $('#patient-form #Patient_numberofchildrenaffected').prev().hide();
    $('#patient-form #Patient_numberofchildrennonaffected').hide();
    $('#patient-form #Patient_numberofchildrennonaffected').prev().hide();
    $('#patient-form #Patient_numberofchildrenunknownstatus').hide();
    $('#patient-form #Patient_numberofchildrenunknownstatus').prev().hide();

    //siblings
    $('#patient-form #Patient_numberofsiblingsaffected').hide();
    $('#patient-form #Patient_numberofsiblingsaffected').prev().hide();
    $('#patient-form #Patient_numberofsiblingsnotaffected').hide();
    $('#patient-form #Patient_numberofsiblingsnotaffected').prev().hide();
    $('#patient-form #Patient_numberofsiblingsunknown').hide();
    $('#patient-form #Patient_numberofsiblingsunknown').prev().hide();

    //twins
    $('#patient-form #Patient_numberoftwinsaffected').hide();
    $('#patient-form #Patient_numberoftwinsaffected').prev().hide();
    $('#patient-form #Patient_numberoftwinsnotaffected').hide();
    $('#patient-form #Patient_numberoftwinsnotaffected').prev().hide();
    $('#patient-form #Patient_numberoftwinsunknown').hide();
    $('#patient-form #Patient_numberoftwinsunknown').prev().hide();

    //show depending on which dropdown is selected
    $('#patient-form #Patient_confirmedmutation').trigger('change');

    $('#patient-form #Patient_children').trigger('change');
    $('#patient-form #Patient_siblings').trigger('change');
    $('#patient-form #Patient_twins').trigger('change');

});
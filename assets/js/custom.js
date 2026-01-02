
$(document).ready(function(){
        // $("#orderForm").validate();
        // $("#orderForm").submit(function(){
        //     if ($('input[name="address_id"]').length == 0) {
        //         $(".addressListBlock").prepend('<div class="alert alert-danger paddingNotFound" role="alert">Not Found your delivery address Please add! by link bellow</div>');
        //         $('html, body').animate({ scrollTop: 0 }, 'slow');
        //         return false;
        //     }
        //     var selectedValue = $('input[name="address_id"]:checked').val();
        //     if (!selectedValue) {
        //         $(".addressListBlock").prepend('<div class="alert alert-danger paddingNotFound" role="alert">Please select your delivery address.</div>');
        //         $('html, body').animate({ scrollTop: 0 }, 'slow');
        //         return false;
        //     } 
            
        // });
        // //alert(selectedValue)

        // $("#addressForm").validate();
        // $('#addressButton').click(function() {
        //     $('.addressDiv').slideToggle('slow'); 
        //     $(".paddingNotFound").remove();
        // });
        
        // $('#country').on('change', function() {
        //     getStateByAjax();
        // });

        // $('#state').on('change', function() {
        //     getCityByAjax();
        // });

    });

function addressSetSession(addressID=""){
    //alert(addressID);
    
    if (addressID) {
        $.ajax({
            url: BaseUrl+'inc/ajax_action.php', // Your server-side script for states
            type: 'POST',
            data: { addressID: addressID, action : "addressSetSession" },
            success: function(html) {
                $('.paddingNotFound').remove();
            }
        });
    } 

    return false;
}

function getStateByAjax(selectVal = ""){
    var countryID = $("#country").val();
    if (countryID) {
        $.ajax({
            url: BaseUrl+'inc/ajax_action.php', // Your server-side script for states
            type: 'POST',
            data: { country_id: countryID, action : "getStates", selectState : selectVal },
            success: function(html) {
                $('#state').html(html); // Populate state dropdown
                $('#city').html('<option value="">Select City</option>'); // Clear city dropdown
            }
        });
    } else {
        $('#state').html('<option value="">Select State</option>');
        $('#city').html('<option value="">Select City</option>');
    }
}

function getCityByAjax(selectVal = ""){
    var state_id = $("#state").val();
    if (state_id) { 
        $.ajax({
            url: BaseUrl+'inc/ajax_action.php', // Your server-side script for cities
            type: 'POST',
            data: { state_id: state_id, action : "getCities", selectCity : selectVal },
            success: function(html) {
                $('#city').html(html); // Populate city dropdown
            }
        });
    } else {
        $('#city').html('<option value="">Select City</option>');
    }
}

function getVariationsJS(productID){
    var queryString = "";
    var qty = $("#qty_" + productID).val();
    queryString = 'action=showVariation&food_id='+productID+'&qty='+qty;
    //$('#addToCartVariation').modal('show');

    var regex = new RegExp(/^\+?[0-9(),.-]+$/);
    if(!qty.match(regex)) {
        alert("Only allowed Numbers in Quantity Feild.");
        return false;
    }


    $.ajax({
        url: BaseUrl + "inc/ajax_action.php",
        data: queryString,
        type: "POST",
        success: function(result){
            //alert(result);
            $(".variationData").html(result);

            $("#ajaxModalPopup").modal('dispose');
            //$("#modalContainer").html(result);
        }
    }).done(function(){
        
        $('#addToCartVariation').modal('show');
    });
    return false;
}
function setVariation(Obj){ 

    var variName = atob(Obj.getAttribute("data-nn"));
    //var variPrice = atob(Obj.getAttribute("data-pp"));
    var food_p = atob($("#food_p").val());

    var priceVal = '';
    var priceValArray = [];
    $('.variCheckBox:checked').map(function(){
        priceVal = parseInt(atob($(this).attr("data-pp")));
        priceValArray.push(priceVal);
    }).get();

    var total = 0;
    $.each(priceValArray,function() {
        total += this;
    });
    var finalPriceCount = parseInt(food_p) + parseInt(total);;
    $("#finalPrice").html(finalPriceCount);

    //var food_p = $("#finalPrice").html();
    // if ($(Obj).is(':checked')) {
    //     finalPriceCount = parseInt(food_p) + parseInt(variPrice);
    // };
    // if ($(Obj).is(':checked') == false) {
    //     finalPriceCount = parseInt(food_p) - parseInt(variPrice);
    // };
}

function cartAction(action, product_code='') {
        var queryString = "";
        if (action != "") {
            switch (action) {
                case "add":
                    queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" +product_code).val();
                    var value = $("#qty_" +product_code).val()
                    var regex = new RegExp(/^\+?[0-9(),.-]+$/);
                    if(!value.match(regex)) {
                        alert("Only allow Numbers in Quantity Feild.");
                        return false;
                    }
                    break;
                case "remove":
                    queryString = 'action=' + action + '&code=' + product_code;
                    break;
                case "addVariation":
                    product_code = $("#productID").val();
                    variationData = $('#addVariationForm').serialize();

                    //formData = $('#addVariationForm').serializeArray();
                    //console.log(variationData);
                    queryString = 'action=' + action + '&code=' + product_code + '&quantity=' + $("#qty_" +product_code).val()+'&variation='+variationData;
                    break;

                case "empty":
                    queryString = 'action=' + action;
                    break;
            }
        }

        //alert(queryString);
        jQuery.ajax({
            url: BaseUrl + "inc/ajax_action.php",
            data: queryString,
            type: "POST",
            success: function(data) {
                $("#cart-item").html(data);
            },
            error: function() {}
        });

        if(action == "addVariation"){
            $("#addToCartVariation").modal('hide');
            return false;
    }
}
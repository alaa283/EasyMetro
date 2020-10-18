//add daily ticket validation
$("#dtickets").validate({
    rules:{
        station_start:{
            required:true
        },
        station_end:{
            required:true
        },
        price:{
            required:true
        },
        phone_or_credit:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#dailytickets").validate({
    rules:{
        sup_name1:{
            required:true
        },
        num_montaka1:{
            required:true
        },
        sup_name2:{
            required:true
        },
        num_montaka2:{
            required:true
        },
        price:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#sups").validate({
    rules:{
        sup_name:{
            required:true
        },
        num_montaka:{
            required:true
        },
        price:{
            required:true
        },
        name:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#supmon").validate({
    rules:{
        num_montaka:{
            required:true
        },
        name:{
            required:true
        },
        num_national:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#sup3mons").validate({
    rules:{
        num_montaka:{
            required:true
        },
        name:{
            required:true
        },
        num_national:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#mannulys").validate({
    rules:{
        num_montaka:{
            required:true
        },
        name:{
            required:true
        },
        num_national:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add daily ticket validation
$("#sup3mons").validate({
    rules:{
        num_montaka:{
            required:true
        },
        name:{
            required:true
        },
        num_national:{
            required:true
        },
        _num_mobile:{
            required:true
        },
       
        
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});


//add money daily ticket validation
$("#money_daily_ticket").validate({
    rules:{
        step1_9:{
            required:true
        },
        step1_16:{
            required:true
        },
        step1_37:{
            required:true
        },
        step3_9:{
            required:true
        },
        step3_16:{
            required:true
        },
        step3_37:{
            required:true
        },
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});

//add types  subscription validation
$("#types_subscription").validate({
    rules:{
        type_sub:{
            required:true
        },
        type_line:{
            required:true
        },
        station1:{
            required:true
        },
        station2:{
            required:true
        },
        station3_4:{
            required:true
        },
        station5_6:{
            required:true
        },
    },
    errorClass: "help-inline",
    errorElement: "span",
    highlight:function(element, errorClass, validClass) {
        $(element).parents('.control-group').addClass('error');
    },
    unhighlight: function(element, errorClass, validClass) {
        $(element).parents('.control-group').removeClass('error');
        $(element).parents('.control-group').addClass('success');
    }
});
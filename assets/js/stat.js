$(function(){
        $.datepicker.setDefaults(
            $.extend($.datepicker.regional["ru"])
        );
        $('.datepicker').datepicker({
            firstDay : 1,
            dateFormat: "yy-mm-dd"
            
        });
        
        var formMain = $('#req-form'); 
        formMain.on('submit', function(e){
            e.preventDefault();
            var form = $(this),
                data = form.serialize();
                url = 'stat_res.php'
            $.post(url, data, function(response){
                $('.results').html(response);                        
            });
        });   
        
        $('.radio-btns input').on('click', function(){
            formMain.submit();            
        });
        $('select[name=source-type], #sitename').on('change', function(){
            formMain.submit();
        })
        
        $(".results").on('click', "#check-all", function(){
            $('.table').find(':checkbox').prop('checked', this.checked);
    
        });
        $(".results").on('click', "input[type=checkbox]", function(){
            var checkboxes =  $(".results").find("input[type=checkbox]:checked");
            if(checkboxes.length === 0){
                $('.delete-btn').hide();
            }else{
                $('.delete-btn').show();
            }
        });
        $(".results").on('click', "#del-selected", function(){
            var checkboxes = $('.elem-row').find("input[type=checkbox]:checked"),
                values = "",
                counter = 0;
            if(checkboxes.length === 0){
                return;
            }else if(checkboxes.length == 1){
                values = checkboxes.val();
                
            }else{
                checkboxes.each(function(){
                    if(counter != checkboxes.length-1){
                        values += $(this).val()+", "
                    }else{
                        values += $(this).val();    
                    }
                    counter++                                                
                });
            }
            
            protect = confirm( 'Вы точно хотите удалить выбранные записи?');
            if(protect){
                $.post('remove.php', {ids: values}, function(response){
                    formMain.submit();   
                });
            }
        });
        $('#add-form').on('submit', function(e){
            e.preventDefault();
            if($('#sitename').val() == ''){
                $('#sitename').addClass('error-inp');
            }else{
                var data = $(this).serialize();
                $.post('add.php', data, function(response){
                    $('.results').html(response);
                });    
            }
        });    
        
        
});        
function removeItem(self, id){
    var self = $(self),
        tr = self.closest('tr');
        protect = confirm( 'Вы точно хотите удалить запись № ' + tr.find('td').eq(0).text() + '?' );
    if(protect) {
        $.post('remove.php', {id: id}, function(response){
            tr.remove();      
        });
    }
}
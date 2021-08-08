var categoryList = [{"label":"Iftar Box","value":"39"},{"label":"Iftar by Choice","value":"37"},{"label":"Special ","value":"38"},{"label":"Duck","value":"35"},{"label":"Biryani","value":"36"},{"label":"Beef","value":"33"},{"label":"Fish","value":"34"},{"label":"Mutton","value":"32"},{"label":"Tandoori","value":"30"},{"label":"Gravy Chicken","value":"31"},{"label":"Idly Vada","value":"29"},{"label":"Dosa","value":"27"},{"label":"Uttapam","value":"28"},{"label":"Salad","value":"26"},{"label":"Raita","value":"24"},{"label":"Appetizers","value":"25"},{"label":"Soup","value":"23"},{"label":"Iftar Menu","value":"22"},{"label":"Our Menu","value":"20"},{"label":"Set Menu","value":"21"}] ; 

CTchange = function(event, ui){
	$(this).data("autocomplete").menu.activeMenu.children(":first-child").trigger("click");
}
    function allcategoryList() {
      
        $( ".categorySelection" ).autocomplete(
		{
            source: categoryList,
			delay:300,
			focus: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value2").val(ui.item.value);
				$(this).val(ui.item.label);
				return false;
			},
			select: function(event, ui) {
				$(this).parent().find(".autocomplete_hidden_value2").val(ui.item.value);
				$(this).val(ui.item.label);
				$(this).unbind("change");
				return false;
			}
		});
			$( ".categorySelection" ).focus(function(){
				$(this).change(CTchange);
			
			});
    }
    



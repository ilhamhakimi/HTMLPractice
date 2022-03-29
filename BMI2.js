<SCRIPT LANGUAGE="JAVASCRIPT">
<!--p>This free script provided by
JavaScriptKit</a></p-->

//Body Mass calculator- by John Scott (johnscott03@yahoo.com)
// 
//Credit must stay intact for use

	var d = new Date();
		document.getElementById("demo").innerHTML = d;
		

function ClearForm(form){

}


function bmi(weight, height) {

         
}


function checkform(form) {

       /*	if (form.weight.value==null||form.weight.value.length==0 || 								   form.height.value==null||form.height.value.length==0){
            alert("\nPlease complete the form first");
            return false;		*/
       }

       else if (parseFloat(form.height.value) <= 0||
                parseFloat(form.height.value) >=500||
                parseFloat(form.weight.value) <= 0||
                parseFloat(form.weight.value) >=500){
                alert("\nReally know what you're doing? \nPlease enter values again. \nWeight in kilos and \nheight in cm");
                ClearForm(form);
                return false;
       }
       return true;
}


function computeform(form) {

       if (checkform(form)) {

       yourbmi=Math.round(bmi(form.weight.value, form.height.value/100));
       form.bmi.value=yourbmi;

       /* if (yourbmi >40) {
          
			}
       }
       return;
}
 // --  -->
 
</SCRIPT>
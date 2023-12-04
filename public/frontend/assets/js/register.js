function addFields(){
    // Generate a dynamic number of inputs
    var number = document.getElementById("partners").value;
    document.getElementById("partsp").textContent = number;

    // Get the element where the inputs will be added to
    var container = document.getElementById("container");
    // Remove every children it had before
    while (container.hasChildNodes()) {
        container.removeChild(container.lastChild);
    }
    if (number <= 7){
        for (i=0;i<number;i++){
            // Append a node with a random text
            // container.appendChild(document.createTextNode("Partner Name" ));

            // Create an <input> element, set its type and name attributes
            var nlabel = document.createElement("label");
            nlabel.htmlFor = "partner-name";
            nlabel.innerHTML="{{ __('Partner Name') }}";
            container.appendChild(nlabel);
            var ninput = document.createElement("input");
            ninput.type = "text";
            ninput.name = "Partner" + i;
            ninput.classList.add("form-control");
            container.appendChild(ninput);

            var clabel = document.createElement("label");
            clabel.htmlFor = "partner-country";
            clabel.innerHTML="{{ __('Partner Country') }}";
            container.appendChild(clabel);
            var cinput = document.createElement("select");
            var countries = <?php echo json_encode($countries_names);?>;
            for (var country of countries){
                var opt = document.createElement('option');
                opt.value = country;
                opt.innerHTML = country;
                cinput.appendChild(opt);
            }
            cinput.type = "text";
            cinput.name = "Partner_country" + i;
            cinput.classList.add("form-control");
            container.appendChild(cinput);
            // Append a line break
            container.appendChild(document.createElement("br"));
        }
    }
}
var text="I attend Digital School";
var result = text.search(/Digital School/); //me qeto jemi tu search for a regex
var result2 = text.replace(/Digital School/, /Gjin Gazulli/);
console.log(result);
console.log(result2);

var test = "abcdef";
var regexp = new RegExp('abc');
console.log(regexp.test(test));

var text2 = "Hello World, this is my world!";
var regex = /World/g; //g tregon qe po don me ti kthy all matches jo veq njo
console.log(text2.match(regex));

function validate(){
        var name = document.getElementById('name').value;
        var age = document.getElementById('age').value;
        var city = document.getElementById('city').value;

        var valid_name = /^[A-Za-z]+$/;
        var valid_age = /^[0-9]+$/;

        if(!(name.match(valid_name)) || !(age.match(valid_age)) || city==''){
            if(!(name.match(valid_name))){
                document.getElementById('name_error').style.visibility="visible";
            }
            if(!(age.match(valid_age))){
                document.getElementById('age_error').style.visibility="visible";
            }
            if(city==''){
                document.getElementById('city_error').style.visibility="visible";
            }
            return false;
        }else{
            return true;
        }
}



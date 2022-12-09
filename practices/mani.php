<?php
$mani ="mohit";
$sum =0;
class add{
    // properties
    public $num1,$num2;
    //methods
    function sum(int $num1,int $num2){
    $this->num1=$num1;
    $this->num2=$num2;
    }
} 
$total = new add();
$total->sum(10,20);
echo $total->num1 + $total->num2;
?>
<script>
class add{
    constructor (num1,num2){
    this.num1=num1;
    this.num2=num2;
    }
    addition(num1,num2){
return num1+num2; 
}
}

const total = new add(45,46);
const x=total.addition(15,20);
console.log(x,"mani");
const data = {"name": ["Aman", "Hardik", "pd.NA"],"qualified": ["True", "False", "pd.NA"]};
console.log (data.name[0].length);
for(const mani in data){
    console.log(data[mani])
    const sunny=data[mani];
    for(const kirti in sunny){
        console.log(sunny[kirti])
    }
}

class multiply{
constructor(a,b){
    this.a=a;
    this.b=b;
}
multiplication(a,b){
    return a*b;
}
}
const total=new multiply(8,5);
const x=total.multiplication(8,9);
console.log(x);



class subtract{
constructon(c,d){
    this.c=c;
    this.d=d;
}
subtraction(c,d){
    return c-d;

}
}

const total=new subtract(10,5);
const x=total.subtraction(50,22);
console.log(x);

const mani = {name: "mani", myroom: '22', age: "12",address : {city : 'test',country:'ll'}};


</script>
<input type="text" id="fname"
name="fname"/>
<label for ="fname"> firstname</label>
<div> jbdkjcgd <span><p>jdcjsd</p></span></div>
<?php
function cube($n){
    return $n*$n*$n;
}
echo "cube of 3 is:".cube(3);

?>

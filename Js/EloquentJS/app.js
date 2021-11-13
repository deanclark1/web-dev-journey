
// Looping Triangle program

// for (let i = '#'; i.length < 8 ; i = i + '#'){
//     console.log(i);
// }

// fizzbuzz

// for(i = 0; i <= 100; i++) {
//     let output = " ";
//     if(i % 3 === 0){
//         output += "Fizz";
//     }
//     if(i % 5 === 0) {
//         output += "Buzz";
//     }
//     if(i % 3 === 0 && i % 5 === 0){
//         output = output + "FizzBuzz"
//     }
//     console.log(output || i);

// }

for (let n = 1; n <= 100; n++) {
  let output = "";
  if (n % 3 == 0) output += "Fizz";
  if (n % 5 == 0) output += "Buzz";
  console.log(output || n);
}
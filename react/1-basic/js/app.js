 

 const points = [2,4,5,7,3,6,3,5,6];


//i want total points


// let total = 0; // this total become state in imperative programming

// total += points[0];
// total += points[1];
// total += points[2];
// total += points[3];
// total += points[4];
// total += points[5];


// for(let point of points) {
//     total += point;
// }

const uniqueArray = new Set(points);

console.log(uniqueArray);

// for(let point of points){
//     // console.log(point);
//     if(!uniqueArray.includes(point)) {
//         uniqueArray.push(point)
//     }
// }

const total = points.reduce((pv,cv) => pv+cv,0)


// console.log(uniqueArray);



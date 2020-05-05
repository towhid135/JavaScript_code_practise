Student = {
    Name: 'Towhid',
    Id: 17101135,
    Sex: 'Male'
	};

for ( info in Student)   //'info' will receive property name from the 'Student' object
{
    console.log(info);
	console.log(Student[info]);
}
<!DOCTYPE html>
<html>
<head>
	<style>
        ul
	{
			list-style-type: none;
			margin-bottom: 10px;
			padding: 0;
			overflow: hidden;
			background-color: white;
			width: 600px;
	}
	li
	{
			float: left;
			border-right: 1px solid white;
			width: 90px;
			height: 27px;
			background-color: lightblue;
	}

	li a
	{

			 display: block;
			 color: black;
			 text-align: center;
			 text-decoration: none;
	}

	li a:hover
	{
			background-color: white;
			border-bottom: 3px solid blue;
	}
	.last
	{
			border-right: none;
	}

	.pagination
	{
			display: inline-block;
	}
	.pagination a
	{

			color: black;
			border:1px solid lightgray;
			padding: 8px 16px;
			text-decoration: none;
			transition:background-color.3s;
	}
.pagination a:hover
		{
			background-color: orange;
		}
h1
	{
			color: red;
			border-bottom: 1px solid lightgray;
		}
h2
	{
 		border:1px solid #ddd;
 		width: 100%;
 		height: 40px;
 		border-radius: 0.3em;
 		padding-bottom: 10px;
 		position: relative;

 	}
.img
		{
			padding-left: 5px;
			padding-right: 5px;
			position: relative;top: 5px;
		}
.orange
		{
			background-color: #ffedad;
		}
.button
	{
			background-color: green;
			border:none;
			width: 100px;
			height: 30px;
			color: white;
	}

.head1
		{
			float: right;
			margin-right:50px;
		}
.input4
	{
		height: 25px;
		float: right;
		position: relative;
		right: 40px;
	}

.text3
	{
		float: right;
	}

.table2
	{
		color: black;
		text-decoration: none;
		border-color: white;
	}

	tr
	{
		border-color: white;
	}
	.change
	{
		position: relative;
		float: right;
		bottom: 30px;
		border:1px solid gray;
		height: 27px;
	}
	.use{
		color: blue;
	}
	.new
	{
		color: black;
		text-decoration: none;
	}
     </style>
	<title>Student List</title>
</head>
<body>
	<h1>STUDENT MANAGEMENT SYSTEM</h1>
	<div>
		<ul>
			<li><a href="/list"><b>Admin</b></a></li><li><a href="teacher.html" target="blank"><b>Teacher</b></a></li><li><a href="student.html" target="blank"><b>Student</b></a></li><li><a href="course.html" target="blank"><b>Course</b></a></li><li><a href="batch.html" target="blank"><b>Batch</b></a></li><li class="last" target="blank"><a href="fees.html" target="blank"><b>Fees</b></a></li>
		</ul>
	</div>

@extends('links_bootstrap')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Grade</title>
  </head>
  <body>
    <div class="container">
      <h1>Update Student Grade</h1>
      <h2>Student Information</h2>
      <h3>Student ID:{{$student->id}}</h3>
      <h3>Course Name:{{$student->course_name}}</h3>
      <h3>Section:{{$student->section}}</h3>
    </div>
  </body>
</html>
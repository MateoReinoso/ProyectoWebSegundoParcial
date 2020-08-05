<?php

session_start();
$conn = mysqli_connect(
  'database-school-instance.cdphngtxjlc6.us-east-1.rds.amazonaws.com',
  'admin',
  '12345678',
  'dbSchool'
);

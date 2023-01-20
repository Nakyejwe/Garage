<?php

// Connect to the database
include 'connection.php';

// Function to add a new appointment to the database
function addAppointment($customerId, $garageId, $serviceId, $appointmentDate, $appointmentTime) {
  global $db;
  $query = "INSERT INTO appointments (customer_id, garage_id, service_id, appointment_date, appointment_time) VALUES (?, ?, ?, ?, ?)";
  $stmt = $db->prepare($query);
  $stmt->execute([$customerId, $garageId, $serviceId, $appointmentDate, $appointmentTime]);
}

// Function to update an existing appointment in the database
function updateAppointment($appointmentId, $customerId, $garageId, $serviceId, $appointmentDate, $appointmentTime) {
  global $db;
  $query = "UPDATE appointments SET customer_id = ?, garage_id = ?, service_id = ?, appointment_date = ?, appointment_time = ? WHERE id = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([$customerId, $garageId, $serviceId, $appointmentDate, $appointmentTime, $appointmentId]);
}

// Function to delete an appointment from the database
function deleteAppointment($appointmentId) {
  global $db;
  $query = "DELETE FROM appointments WHERE id = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([$appointmentId]);
}

// Function to retrieve a list of appointments from the database
function getAppointments($customerId = null, $garageId = null, $serviceId = null, $appointmentDate = null) {
  global $db;
  $query = "SELECT * FROM appointments";
  $whereClauses = [];
  $params = [];
  if ($customerId) {
    $whereClauses[] = "customer_id = ?";
    $params[] = $customerId;
  }
  if ($garageId) {
    $whereClauses[] = "garage_id = ?";
    $params[] = $garageId;
  }
  if ($serviceId) {
    $whereClauses[] = "service_id = ?";
    $params[] = $serviceId;
  }
  if ($appointmentDate) {
    $whereClauses[] = "appointment_date = ?";
    $params[] = $appointmentDate;
  }
  if (count($whereClauses) > 0) {
    $query .= " WHERE " . implode(" AND ", $whereClauses);
  }
  $stmt = $db->prepare($query);
  $stmt->execute($params);
  return $stmt->fetchAll();
}


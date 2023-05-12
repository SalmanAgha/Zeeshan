<?php

// Get the form data from the request
$data = $_POST;

// Ensure that all questions have been answered
foreach ($data as $question => $response) {
  if (empty($response)) {
    // Return an error response if any questions were unanswered
    http_response_code(400);
    echo json_encode(array('error' => 'All questions must be answered.'));
    exit();
  }
}

// Count the number of "yes" and "no" responses
$yes_count = 0;
$no_count = 0;

foreach ($data as $response) {
  if ($response === 'yes') {
    $yes_count++;
  } else {
    $no_count++;
  }
}

// Return the highest count
if ($yes_count > $no_count) {
  $result = 'yes';
} else {
  $result = 'no';
}

// Return the result as a JSON response
  $data["yes"] = $yes_count;
  $data["no"] = $no_count;
  $data["result"] = $result;
    echo json_encode($data);

?>

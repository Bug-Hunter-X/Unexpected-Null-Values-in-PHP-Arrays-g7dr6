function foo(array $arr) {
  foreach ($arr as $value) {
    if (is_null($value)) {
      // Handle null values here
      return null; // Or throw an exception
    } else {
       // Process non-null values
       // ...Your code here...
    }
  }
  return $arr; // Or some other appropriate return value
} 
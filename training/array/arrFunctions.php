<?php
/*
Tạo và kiểm tra mảng
| Hàm                               | Mô tả                                        |
| --------------------------------- | -------------------------------------------- |
| `is_array()`                      | Kiểm tra xem biến có phải mảng không         |
| `count()`                         | Đếm số phần tử                               |
| `array_keys()` / `array_values()` | Lấy danh sách key hoặc value                 |
| `in_array()`                      | Kiểm tra giá trị có tồn tại trong mảng không |
| `array_key_exists()`              | Kiểm tra key có tồn tại không                |

Duyệt và xử lý phần tử
| Hàm              | Mô tả                                                                     |
| ---------------- | ------------------------------------------------------------------------- |
| `array_map()`    | Áp dụng một hàm lên từng phần tử (giống `map()` trong JS hay Java Stream) |
| `array_filter()` | Lọc mảng dựa trên điều kiện                                               |
| `array_reduce()` | Tích lũy kết quả từ các phần tử (giống `reduce()` trong JS)               |
| `array_walk()`   | Áp dụng callback cho mỗi phần tử (có thể thay đổi giá trị trực tiếp)      |

Thêm, xoá, tách, nối mảng
| Hàm                                 | Mô tả                             |
| ----------------------------------- | --------------------------------- |
| `array_merge()`                     | Gộp 2 mảng lại                    |
| `array_push()` / `array_pop()`      | Thêm / lấy phần tử cuối           |
| `array_shift()` / `array_unshift()` | Lấy / thêm phần tử đầu            |
| `array_slice()`                     | Cắt mảng con                      |
| `array_splice()`                    | Thêm, xoá phần tử ở vị trí bất kỳ |

| Hàm                    | Mô tả                             |
| ---------------------- | --------------------------------- |
| `sort()` / `rsort()`   | Sắp xếp theo value                |
| `asort()` / `arsort()` | Sắp xếp theo value giữ nguyên key |
| `ksort()` / `krsort()` | Sắp xếp theo key                  |
| `usort()` / `uasort()` | Sắp xếp theo custom function      |

Kết hợp / khác biệt / giao nhau
| Hàm                 | Mô tả                         |
| ------------------- | ----------------------------- |
| `array_merge()`     | Gộp mảng                      |
| `array_diff()`      | Phần tử khác nhau giữa 2 mảng |
| `array_intersect()` | Phần tử chung giữa 2 mảng     |
| `array_combine()`   | Gộp 2 mảng thành key-value    |

Trong Laravel, có dùng mấy hàm này không?
Có — nhưng ít khi dùng trực tiếp.
Lý do là Laravel cung cấp Collection (Illuminate\Support\Collection) — 
là một lớp “wrapper” cho mảng, với API hướng đối tượng và chuỗi xử lý tiện hơn.

*/

$cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);
echo in_array("Toyota", $cars);

$nums = [1, 3, 5, 7];
$doubleNums = array_map(fn($num) => $num * 2, $nums);
print_r($doubleNums); // 2, 6, 10, 14

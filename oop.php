<?php

class Animal
{
  # property animals

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
  }
   
   public $array = ['ayam','kucing','kelinci'];
  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    $data = $this->array;
    foreach($data as $key => $value):
        $data2[] = [
          'id' => $key,
          'hewan' => $value
        ];
    endforeach;
    echo '<pre>'; echo json_encode($data2); echo '</pre>';
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    # gunakan method array_push untuk menambahkan data baru
    array_push($this->array,$data);
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    $this->array[$index] = $data;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    unset($this->array[$index]);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";


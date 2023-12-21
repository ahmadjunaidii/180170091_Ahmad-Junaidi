<h1>Data Diri</h1>
<table>
    <tr>
            <th align="left">NIM</th>
            <th>:</th>
            <th>180170091</th>
    </tr>
    <tr>
        <th align="left">Nama</th>
        <th>:</th>
        <th>Ahmad Junaidi</th>
    </tr>
    <tr>
        <th align="left">Jurusan</th>
        <th>:</th>
        <th>Teknik Informatika</th>
    </tr>
    <tr>
        <th align="left">Program Studi</th>
        <th>:</th>
        <th>Teknik Informatika</th>
    </tr>
    <tr>
        <th align="left">Mata Kuliah</th>
        <th>:</th>
        <th>Mobile Programming</th>
    </tr>
    @foreach ($data_data as $data)
    <tr>
        <td>{{ $data->NIM }}</td>
        <td>{{ $data->Nama }}</td>
        <td>{{ $data->Jurusan }}</td>
        <td>{{ $data->Program_Studi }}</td>
        <td>{{ $data->Mata_Kuliah }}</td>
    </tr>
        
    @endforeach
</table>
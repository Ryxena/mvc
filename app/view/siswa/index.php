<h1>HAHA</h1>
<style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      font-family: 'Arial', sans-serif;
      color: #333;
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    tr:hover {
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $iteration = 1; ?>
        <?php foreach($data['users'] as $data): ?>
            <tr>
                <td><?= $iteration++ ?></td>
                <td><?= $data['name'] ?></td>
                <td><?= $data['email'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
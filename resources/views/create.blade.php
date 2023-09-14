<form action="/" method="POST">
    @csrf
    <div>
        <label for="type">ประเภท</label>
        <select name="type" id="type" required>
          <option value="income">รายรับ</option>
          <option value="expenses">รายจ่าย</option>
        </select>
    </div>

  <div>
    <label for="name">ชื่อ :</label>
    <input type="text" name="name" id="name" required>
  </div>

  <div>
    <label for="amount">จำนวนเงิน :</label>
    <input type="number" step="0.01" title="กรุณาป้อนทศนิยม 2 ตำแหน่ง" name="amount" id="amount" required>
  </div>

  <div>
    <label for="datetime">วันที่ใช้จ่าย:</label>
    <input type="datetime-local"  name="datetime" id="datetime" required>
  </div>

  <button type="submit">บันทึก</button>

</form>
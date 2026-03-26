import mysql.connector
conn = mysql.connector.connect(
host="localhost",
user="root",
password="ammar007",
database="testdb"
)
cursor = conn.cursor()

# CREATE
cursor.execute("INSERT INTO students (name, age) VALUES ('Ali', 20)")
conn.commit()
# READ
cursor.execute("SELECT * FROM students")
for row in cursor.fetchall():
    print(row)
# UPDATE
cursor.execute("UPDATE students SET age=21 WHERE name='Ali'")
conn.commit()
# DELETE
"""""
cursor.execute("DELETE FROM students WHERE name='Ali'")
"""
conn.commit()
conn.close()
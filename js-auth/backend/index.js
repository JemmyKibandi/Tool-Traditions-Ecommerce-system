// STEP 1: import express/ other variables
const express = require("express");
const path = require("path");
const bp = require("body-parser");
const mysql = require("mysql");
// STEP 2: declare a variable of it's method
const app = express();
const PORT = 3000;

// MIDDLEWARE
app.use(express.json());
app.use(bp.urlencoded({ extended: true }));
app.use(bp.json());
// Serve static files from the "frontend" directory
app.use(express.static(path.join(__dirname, "../frontend/frotend")));

// STEP 4: code to connect to the database
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "crm",
});

// STEP 5: Show that you've connected to the database
connection.connect((err, connection) => {
  if (err) {
    console.log(err);
  } else {
    console.log("Connected to the database");
  }
});

// // Define routes
app.get("/", (req, res) => {
  res.sendFile(path.join(__dirname, "../frontend/index.php"));
});

// // Code to GET data to the database
// app.get("/users", (req, res)=>{
//   const sql = "SELECT * FROM `users`";
//   connection.query(sql,(err, results) =>{
//     if (err) {
//       res.status(500).send('Internal Server Error', err);
//     } else {
//       res.send(results);
//     }
//   }
// )})
// Code to insert data to the database
app.post("/register", (req, res) => {
  const {
    newUserId = result.insertId,
    fname,
    phone,
    email,
    pword,
    actpword,
  } = req.body;
  const sql =
    "INSERT INTO `leads`(`lead_id`, `fname`, `lname`, `phone`, `email`, `property`, `referee`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')INSERT INTO `users`(`user_id`, `fname`, `phone`, `email`, `pword`, `actpword`) VALUES (?, ?, ?, ?, ?, ?)";
  connection.query(
    sql,
    [newUserId, fname, phone, email, pword, actpword],
    (err, result) => {
      if (err) {
        console.error("Error inserting data:", err);
        res.status(500).send("Internal Server Error");
      } else {
        res.sendFile(path.join(__dirname, "../frontend/index.php"));
      }
    }
  );
});
// ROUTE TO LOGOUT
// app.post('/logout', (req, res) => {
//   // Clear the user's session data
//   req.session.destroy((err) => {
//       if (err) {
//           console.error('Error destroying session:', err);
//       }
//       // Redirect the user to the login or home page
//       res.redirect('/login'); // Redirect to the desired page
//   });
// });

// //CODE TO FETCH DATA

// app.post('/login', async (req, res) => {
//   const { email, password } = req.body;

//   try {
//     const sql = 'SELECT * FROM users WHERE email = ?';
//     connection.query(sql, [email], (err, results) => {
//       if (err) {
//         console.error('Error:', err);
//         return res.status(500).json({ success: false, message: 'Internal server error' });
//       }

//       if (results.length > 0 && results[0].pword === password) {
//         return res.status(200).json({ success: true, user: results[0] });
//       } else {
//         return res.status(401).json({ success: false, message: 'Invalid credentials' });
//       }

//     });
//   } catch (error) {
//     console.error('Error:', error);
//     res.status(500).json({ success: false, message: 'Internal server error' });
//   }
// });

//ROUTE TO CARDS
// const filePath = path.join(__dirname, 'drag.html');
// fs.readFile(filePath, 'utf-8', (err, content) => {
//   if (err) {
//     res.writeHead(500);
//     res.end('Internal Server Error');
//   } else {
//     res.writeHead(200, { 'Content-Type': 'text/html' });
//     res.end(content);
//   }
// });

// STEP LAST: listen for the port
app.listen(PORT, () => console.log(`Server is running at port ${PORT}`));

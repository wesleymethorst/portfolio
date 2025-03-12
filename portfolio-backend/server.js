import express from "express";
import pg from "pg";
import cors from "cors";
import dotenv from "dotenv";

dotenv.config();

const app = express();
app.use(express.json());
app.use(cors());

// PostgreSQL connectie
const { Pool } = pg;
const pool = new Pool({
  connectionString: process.env.DATABASE_URL,
  ssl: { rejectUnauthorized: false }, // Nodig voor Railway hosting
});

// API endpoint: Alle projecten ophalen
app.get("/projects", async (req, res) => {
  try {
    const result = await pool.query("SELECT * FROM projects ORDER BY id DESC");
    res.json(result.rows);
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: "Database error" });
  }
});

// API endpoint: Een nieuw project toevoegen
app.post("/projects", async (req, res) => {
  try {
    const { name, description, link } = req.body;
    const result = await pool.query(
      "INSERT INTO projects (name, description, link) VALUES ($1, $2, $3) RETURNING *",
      [name, description, link]
    );
    res.status(201).json(result.rows[0]);
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: "Database error" });
  }
});

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => console.log(`🚀 Server running on port ${PORT}`));

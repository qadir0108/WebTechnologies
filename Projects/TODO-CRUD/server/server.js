import express from 'express';
import mongoose from 'mongoose';
import cors from 'cors';
import TodoRouter from './routes/todo.route.js';

const app = express();
app.use(
  express.json({
    limit: '20kb',
  })
);
app.use(cors());
const PORT = 3000;

mongoose
  .connect('PLEASE ADD YOUR MONGODB CONNECTION STRING HERE')
  .then(() => {
    console.log('Connected to MongoDB');
  })
  .catch((error) => {
    console.log('Error:', error);
  });

app.listen(PORT, () => {
  console.log(`Server running on port: http://localhost:${PORT}`);
});

app.use('/api/todos', TodoRouter);

/*
please add your MongoDB connection string in the mongoose.connect() method otherwise the server will not work and u will see this error in the console
Error: MongoParseError: Invalid scheme, expected connection string to start with "mongodb://" or "mongodb+srv://
*/

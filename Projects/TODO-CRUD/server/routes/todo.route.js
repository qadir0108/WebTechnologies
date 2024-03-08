import express from 'express';
import Todo from '../models/todo.model.js';

const router = express.Router();

// Create a new todo
router.post('/', async (req, res) => {
  try {
    const todo = new Todo({
      title: req.body.title,
      completed: req.body.completed,
    });

    await todo.save();
    res.status(201).json(todo);
  } catch (error) {
    res.status(400).json({ error: error.message });
  }
});

// Get all todos
router.get('/', async (req, res) => {
  try {
    const todos = await Todo.find();
    res.json(todos);
  } catch (error) {
    res.status(400).json({ error: error.message });
  }
});

// Update a todo
router.patch('/:id', async (req, res) => {
  try {
    const todo = await Todo.findById(req.params.id);
    if (todo) {
      todo.completed = req.body.completed;
      await todo.save();
      res.json(todo);
    } else {
      res.status(404).json({ error: 'Todo not found' });
    }
  } catch (error) {
    res.status(400).json({ error: error.message });
  }
});

// Delete a todo
router.delete('/:id', async (req, res) => {
  try {
    const todo = await Todo.findById(req.params.id);
    if (todo) {
      await todo.deleteOne();
      res.json({ message: 'Todo removed' });
    } else {
      res.status(404).json({ error: 'Todo not found' });
    }
  } catch (error) {
    res.status(400).json({ error: error.message });
  }
});

export default router;

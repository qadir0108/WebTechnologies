import React, { useState, useEffect } from 'react';
import toast, { Toaster } from 'react-hot-toast';
import axios from 'axios';

const TodoApp = () => {
  const [todos, setTodos] = useState([]);
  const [newTodo, setNewTodo] = useState('');

  useEffect(() => {
    fetchTodos();
  }, []);

  const fetchTodos = async () => {
    try {
      const response = await axios.get('http://localhost:3000/api/todos');
      setTodos(response.data);
    } catch (error) {
      console.error('Error fetching todos:', error);
    }
  };

  const addTodo = async () => {
    try {
      if (!newTodo) {
        return toast.error('Please enter a todo');
      }

      const response = await axios.post('http://localhost:3000/api/todos', {
        title: newTodo,
        completed: false,
      });
      setTodos([...todos, response.data]);
      toast.success('Todo added successfully');
      setNewTodo('');
    } catch (error) {
      console.error('Error adding todo:', error);
    }
  };

  const removeTodo = async (id) => {
    try {
      await axios.delete(`http://localhost:3000/api/todos/${id}`);
      setTodos(todos.filter((todo) => todo._id !== id));
      toast.error('Todo deleted successfully');
    } catch (error) {
      console.error('Error removing todo:', error);
    }
  };

  const updateTodo = async (id, completed) => {
    try {
      const response = await axios.patch(
        `http://localhost:3000/api/todos/${id}`,
        {
          completed: !completed,
        }
      );
      setTodos(
        todos.map((todo) =>
          todo._id === id
            ? { ...todo, completed: response.data.completed }
            : todo
        )
      );
      toast.success('Todo updated successfully');
    } catch (error) {
      console.error('Error updating todo:', error);
    }
  };

  return (
    <div className="container">
      <h1 className="header">Full Stack Todo App</h1>
      <div className="todo-form">
        <input
          type="text"
          className="todo-input"
          placeholder="Add a new todo..."
          value={newTodo}
          onChange={(e) => setNewTodo(e.target.value)}
        />
        <button className="add-btn" onClick={addTodo}>
          Add Todo
        </button>
      </div>
      <ul className="todo-list">
        {todos.map((todo) => (
          <li key={todo._id} className="todo-item">
            <span
              className={`todo-text ${todo.completed ? 'complete' : ''}`}
              onClick={() => updateTodo(todo._id, todo.completed)}
            >
              {todo.title}
            </span>
            <div className="button-group">
              <button
                className={`status-btn ${
                  todo.completed ? 'completed-btn' : 'incomplete-btn'
                }`}
                onClick={() => updateTodo(todo._id, todo.completed)}
              >
                {todo.completed ? 'Undo' : 'Complete'}
              </button>
              <button
                className="delete-btn"
                onClick={() => removeTodo(todo._id)}
              >
                Delete
              </button>
            </div>
          </li>
        ))}
        <Toaster />
      </ul>
    </div>
  );
};

export default TodoApp;

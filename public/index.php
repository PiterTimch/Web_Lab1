<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота №1</title>
    <style>
        :root {
            --bg-color: #f0f7ff;
            --primary-blue: #007bff;
            --dark-blue: #0056b3;
            --light-blue: #e1efff;
            --text-color: #2c3e50;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--bg-color) 0%, #c2e9fb 100%);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: var(--text-color);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            color: var(--dark-blue);
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            max-width: 600px;
            width: 90%;
        }

        .task-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 25px;
            background-color: white;
            color: var(--primary-blue);
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            border: 2px solid var(--primary-blue);
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .task-btn:hover {
            background-color: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,123,255,0.3);
        }

        /* Адаптивність для мобілок */
        @media (max-width: 600px) {
            .button-container {
                grid-template-columns: repeat(2, 1fr);
            }
            h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

    <h1>Лабораторна робота №1</h1>

    <div class="button-container">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <a href="pages/task_<?php echo $i; ?>.php" class="task-btn">
                Завдання <?php echo $i; ?>
            </a>
        <?php endfor; ?>
    </div>

</body>
</html>
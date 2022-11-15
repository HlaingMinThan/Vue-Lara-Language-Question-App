
# Questions Apis


## API Reference



#### Get Random Question

```http
  GET /random-question
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `correct_question_ids` | `array` | **Required**.|

#### Get total number of questions

```http
  GET /total-questions-count
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| no parameter needed

#### check answer correct or not

```http
  POST /questions/{question}/check-answer
```

| Parameter         | Type     | Description                |
| :-----------------| :------- | :------------------------- |
| `random_language` | `string` | **Required**.|
| `answer`          | `string` | **Required**.|
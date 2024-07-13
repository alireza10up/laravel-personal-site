## my Personal Site : >

visit : [alireza10up.ir](https://alireza10up.ir)

## Database Design (dbdiagarm)
```css
Table users {
  id int [pk, increment]
  name varchar
  email varchar [unique]
  password varchar
  created_at timestamp
  updated_at timestamp
}

Table resumes {
  id int [pk, increment]
  user_id int [ref: > users.id]
  type resume_type
  name varchar
  start_date varchar
  end_date varchar
  description text
  created_at timestamp
  updated_at timestamp
}

Enum resume_type {
  education 
  sexperiences
}

Table skills {
  id int [pk, increment]
  user_id int [ref: > users.id]
  type skills_type
  name varchar
  percentage_of_expertise int
  created_at timestamp
  updated_at timestamp
}

Enum skills_type {
  hard
  soft
}

Table feedbacks {
  id int [pk, increment]
  user_id int [ref: > users.id]
  profile varchar
  name varchar
  description text
  status feedbacks_status
  created_at timestamp
  updated_at timestamp
}

Enum feedbacks_status{
  pending
  approved
  rejected
}

Table customers {
  id int [pk, increment]
  user_id int [ref: > users.id]
  name varchar
  link varchar
  logo varchar
  created_at timestamp
  updated_at timestamp
}

Table projects {
  id int [pk, increment]
  user_id int [ref: > users.id]
  title varchar
  description text
  link varchar
  created_at timestamp
  updated_at timestamp
}

Table blog_posts {
  id int [pk, increment]
  user_id int [ref: > users.id]
  title varchar
  content text
  created_at timestamp
  updated_at timestamp
}

Table contacts {
  id int [pk, increment]
  user_id int [ref: > users.id]
  name varchar
  email varchar
  subject varchar
  message text
  created_at timestamp
  updated_at timestamp
}
```

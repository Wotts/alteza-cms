BEGIN;

    CREATE TABLE IF NOT EXISTS roles (
        id SERIAL PRIMARY KEY NOT NULL,
        description VARCHAR NOT NULL UNIQUE
    );

    CREATE TABLE IF NOT EXISTS users (
        id SERIAL PRIMARY KEY NOT NULL,
        username VARCHAR NOT NULL UNIQUE,
        password VARCHAR NOT NULL,
        user_role_id INTEGER NOT NULL REFERENCES roles(id)
    );

    CREATE TABLE IF NOT EXISTS posts (
        id SERIAL PRIMARY KEY NOT NULL,
        creator INTEGER NOT NULL REFERENCES users(id),
        content VARCHAR NOT NULL
    );

    INSERT INTO roles (description) VALUES ('admin');
    INSERT INTO users (
        username, password, user_role_id
    ) VALUES (
        'baas', 'eindbaas', (SELECT id FROM roles WHERE description = 'admin')
    );
    INSERT INTO posts (
        creator, content
    ) VALUES (
        (SELECT id FROM roles WHERE description = 'admin'),
        'jemoeder'
    );

COMMIT;
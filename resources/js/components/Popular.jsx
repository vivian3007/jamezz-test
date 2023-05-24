export function Popular(props) {
    return (
        <div>
            {props.array.map((element, index) => (
                <h1 key={index}>{element}</h1>
            ))}

            <p>Hierboven is de itemCount van de 10 populairste items opgehaald en weergegeven. De productnaam erbij
                inladen is niet meer gelukt.</p>
        </div>
    );
}

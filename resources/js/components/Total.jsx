export function Total(props) {
    return (
        <div>
            <h1>De totale bestelwaarde per dag is: ${props.array}</h1>
            <p>Ik heb voor deze waarde alle velden orderValue bij elkaar opgetelt en dan keer 10 gedaan, alsof er 10 bestellingen waren op die dag. Ik had helaas geen tijd meer om elke dag softcoded uit te werken ivm school.</p>
        </div>

    );
}

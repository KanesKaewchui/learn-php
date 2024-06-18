document.addEventListener('DOMContentLoaded', () => {
    const processButton = document.getElementById('processButton');
    processButton.addEventListener('click', () => {
        let min = parseInt(document.getElementById('min').value);
        let max = parseInt(document.getElementById('max').value);

        if (isNaN(min) || isNaN(max) || min < 10 || min > 20 || max < min || max > 100) {
            alert('Please enter a min value between 10-20 and max between min and 100.');
            return;
        }

        let array = generateRandomArray(5, min, max);
        array.sort((a, b) => a - b);

        displayArray(array);
    });

    function generateRandomArray(length, min, max) {
        let array = [];
        for (let i = 0; i < length; i++) {
            let randomNum = Math.floor(Math.random() * (max - min + 1)) + min;
            array.push(randomNum);
        }
        return array;
    }

    function displayArray(array) {
        let resultDiv = document.getElementById('result');
        resultDiv.innerHTML = `
            <h2 class="text-lg font-bold mb-2">ผลลัพธ์:</h2>
            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Number</th>
                    </tr>
                </thead>
                <tbody>
                    ${array.map((num, index) => `
                        <tr>
                            <td class="border px-4 py-2">${index + 1}</td>
                            <td class="border px-4 py-2">${num}</td>
                        </tr>
                    `).join('')}
                </tbody>
            </table>
        `;
    }
});

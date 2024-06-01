function myFunction() {
    const input = document.getElementById("myInput");
    const inputStr = input.value.toUpperCase();
    document.querySelectorAll('#customers tr:not(.header)').forEach((tr) => {
      const anyMatch = [...tr.children]
        .some(td => td.textContent.toUpperCase().includes(inputStr));
      if (anyMatch) tr.style.removeProperty('display');
      else tr.style.display = 'none';
    });
  }


  
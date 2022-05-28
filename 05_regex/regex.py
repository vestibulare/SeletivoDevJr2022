"""
5. [Análise de Dados] Em um de nossos sistemas, recebemos um código através de um formulário.
Esse código é bem formatado: ele sempre possui as letras “C” e “P” e possui um conjunto de caracteres
entre um e outro e outro conjunto de caracteres após o “P”.
Essas duas strings representam números hexadecimais, ou seja, podem conter os números de 1 a 9 e as letras de A a F.
Seguem alguns exemplos:

c24p7
cA5C1pBC
CFE2P56
CFCE2P56

Escreva uma regex que resgate as duas strings.
"""

import re


def findString(s):
    """
    Takes a string and scans it for a match.

    To be valid, the string must abide by the following characteristics:
        - Must begin with the letter `C`, in either uppercase or lowercase
        - Must contain the letter `P`, in either uppercase or lowercase
        - Must contain hexadecimal characters, excluding 0, in either lowercase or uppercase, in between the letters `C` and `P`
        - Must contain hexadecimal characters, excluding 0, in either lowercase or uppercase, after the letter `P`

    If the string is valid, captures two groups of substrings:
        - The hexadecimal characters in between the letters `C` and `P`
        - The hexadecimal characters that come after the letters `P`

    Concatenates the value of the two captured groups and returns the concatenated string.
    """
    """
    Breakdown of the regex used:

    (?<=^[Cc]) ->   Asserts that what comes before the regex parser’s current position must match [cC]
                    and that it [cC] must be at the beginning of the string

    ([1-9a-fA-F]+) -> First capturing group. Matches a single character present in the list, between one and unlimited times

    (?=[Pp]([1-9a-fA-F]+$)) :
        (?=[Pp]<...>)   -> Asserts that whatever comes before the regex parser's current position must match [pP]
        [1-9a-fA-F]+    -> Matches a single character present in the list, between one and unlimited times
        ([1-9a-fA-F]+$) -> Second capturing group. Asserts that it must be at the end of the string
    """

    regex = r'''
                (?<=^[Cc])
                ([1-9a-fA-F]+)
                (?=[Pp]([1-9a-fA-F]+$))
                '''

    match = re.search(regex, s, re.X)

    if match and len(match.groups()) == 2:

        result = ""
        for i in match.groups():
            result += i
        return result
    else:
        return "There wasn't a match"


def print_string(txts: list[str]) -> None:
    for i in txts:
        print("Original string: ", i)
        print("Extracted string: ", findString(i), "\n")


if __name__ == "__main__":
    txt_list = [
        "c24p7",
        "cA5C1pBC",
        "CFE2P56",
        "CFCE2P56"
    ]

    print_string(txt_list)

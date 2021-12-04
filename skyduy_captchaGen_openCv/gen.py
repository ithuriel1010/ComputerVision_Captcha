from captcha import Captcha
from captchaOverlap import CaptchaOver
from captcha import Captcha

# letter_set = '0123456789'
# letters_per_img = 5
# min_width, min_height = 128, 36
# c = Captcha(min_width, min_height, letter_set, letters_per_img, debug=True)
# c.batch_create_img(5)

# letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K', 'M',
#                'N', 'P', 'R', 'T', 'U', 'V', 'W', 'X', 'Y']
# c = Captcha(300, 150, fs=['FONT_ITALIC'], debug=False, folder='data/')
# c.batch_create_img(1)

letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H','I','J' 'K', 'L' 'M',
               'N', 'O','P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'q', 'w', 'e','r', 't', 'y', 'u', 'i', 'o', 'p',
               'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'z', 'x', 'c', 'v', 'b', 'n', 'm', '1', '2', '3', '4', '5', '6', '7',
               '8', '9', '0']
c = Captcha(300, 150, fs=['FONT_ITALIC'], debug=False, folder='data/')
c.batch_create_img(1)

## Mohe zmienić font scale and font thickness (100)


#include <stdio_ext.h>

int main() {
    FILE *f;
    int type;
    int id;
    char title[100];
    char image[100];
    int value;
    int price;
    int status;
    // book
    int nextId;
    char author[200];
    int coverType;
    char publisher[100];
    char publishDate[10];
    int page;
    int language;
    char category[100];
    char string[1000];
    while (1) {
        printf("Type of products: ");
        scanf("%d", &type);
        printf("id,title,category_id,image,value,price,status\n");
        f = fopen("products.csv", "a+");
        printf("id: ");
        scanf("%d", &id);
        fprintf(f, "%d,", id);
        printf("title: ");
        __fpurge(stdin);
        gets(title);
        fprintf(f, "%s,", title);
        fprintf(f, "%d,", type);
        printf("image: ");
        __fpurge(stdin);
        gets(image);
        fprintf(f, "%s,", image);
        printf("value: ");
        scanf("%d", &value);
        fprintf(f, "%d,", value);
        printf("price: ");
        scanf("%d", &price);
        fprintf(f, "%d,", price);
        printf("status: ");
        scanf("%d", &status);
        fprintf(f, "%d,,\n", status);
        fclose(f);
        if (type == 1) {
            f = fopen("properties.csv", "a+");
            printf("next id: ");
            scanf("%d", &nextId);
            fprintf(f, "%d,%d,%d,", nextId++,id,1);
            printf("author: ");
            __fpurge(stdin);
            gets(author);
            fprintf(f, "%s,,\n", author);
            fprintf(f, "%d,%d,%d,", nextId++,id,2);
            printf("cover type: ");
            scanf("%d", &coverType);
            if (coverType == 1) {
                fprintf(f, "%s,,\n", "Bìa mềm");
            } else if (coverType == 2) {
                fprintf(f, "%s,,\n", "Bìa cứng");
            }
            fprintf(f, "%d,%d,%d,", nextId++,id,3);
            printf("publisher: ");
            __fpurge(stdin);
            gets(publisher);
            fprintf(f, "%s,,\n", publisher);
            fprintf(f, "%d,%d,%d,", nextId++,id,4);
            printf("publish date: ");
            __fpurge(stdin);
            gets(publishDate);
            fprintf(f, "%s,,\n", publishDate);
            fprintf(f, "%d,%d,%d,", nextId++,id,5);
            printf("page: ");
            scanf("%d", &page);
            fprintf(f, "%d,,\n", page);
            fprintf(f, "%d,%d,%d,", nextId++,id,6);
            printf("language: ");
            scanf("%d", &language);
            if (language == 1) {
                fprintf(f, "%s,,\n", "Tiếng Việt");
            } else if (language == 2) {
                fprintf(f, "%s,,\n", "Tiếng Anh");
            } else if (language == 3) {
                fprintf(f, "%s,,\n", "Tiếng Nhật");
            }
            fprintf(f, "%d,%d,%d,", nextId++,id,7);
            printf("category: ");
            __fpurge(stdin);
            gets(category);
            fprintf(f, "%s,,\n", category);
            fclose(f);
        }
        if (type == 3) {
            f = fopen("properties.csv", "a+");
            printf("next id: ");
            scanf("%d", &nextId);
            fprintf(f, "%d,%d,%d,", nextId++,id,16);
            printf("artist: ");
            __fpurge(stdin);
            gets(string);
            fprintf(f, "%s,,\n", string);
            fprintf(f, "%d,%d,%d,", nextId++,id,17);
            printf("record label: ");
            __fpurge(stdin);
            gets(string);
            fprintf(f, "%s,,\n", string);
            fprintf(f, "%d,%d,%d,", nextId++,id,18);
            printf("track list: ");
            __fpurge(stdin);
            gets(string);
            fprintf(f, "%s,,\n", string);
            fprintf(f, "%d,%d,%d,", nextId++,id,19);
            printf("release date: ");
            __fpurge(stdin);
            gets(string);
            fprintf(f, "%s,,\n", string);
            fprintf(f, "%d,%d,%d,", nextId++,id,20);
            printf("category: ");
            __fpurge(stdin);
            gets(string);
            fprintf(f, "%s,,\n", string);
            fclose(f);
        }
    }
}
